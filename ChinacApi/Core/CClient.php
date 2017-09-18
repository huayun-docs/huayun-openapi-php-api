<?php
/**
 * 通信客户端
 * @author Tu
 */
namespace ChinacApi\Core;

use ChinacApi\Core\Http\CHttp;
use ChinacApi\Core\Exception\ServerException;

class CClient
{
    public $clientProfile;
    public $__urlTestFlag__;
    
    public function __construct($clientProfile)
    {
        $this->clientProfile = $clientProfile;
    }
    
    /**
     * 处理通信返回信息
     * @param  object  $request        操作对象
     * @param  mixed   $signer         签名方法对象
     * @param  mixed   $credential     签名实例
     * @param  boolean $autoRetry      是否重试
     * @param  integer $maxRetryNumber 重试最大次数
     * @return mixed
     */
    public function getResponse($request, $signer = null, $credential = null, $autoRetry = true, $maxRetryNumber = 1)
    {
        $response = $this->doAction($request, $signer, $credential, $autoRetry, $maxRetryNumber);
        $respObject = $this->parseResponse($response->getBody());
        if (false == $response->isSuccess()) {
            $this->buildApiException($respObject, $response->getStatus());
        }
        return $respObject;
    }

    /**
     * 通信获取返回信息
     * @param  object  $request        操作对象
     * @param  mixed   $signer         签名方法对象
     * @param  mixed   $credential     签名实例
     * @param  boolean $autoRetry      是否重试
     * @param  integer $maxRetryNumber 重试最大次数
     * @return mixed
     */
    private function doAction($request, $signer = null, $credential = null, $autoRetry = true, $maxRetryNumber = 1)
    {
        if (null == $this->clientProfile &&
            (null == $signer || null == $credential || null == $request->getRegionId())
        ) {
            throw new ClientException('No active profile found.', 'SDK.InvalidProfile');
        }
        if (null === $signer) {
            $signer = $this->clientProfile->getSigner();
        }
        if (null === $credential) {
            $credential = $this->clientProfile->getCredential();
        }
        $request = $this->prepareRequest($request);

        $requestUrl = $request->composeUrl($signer, $credential);

        if ($this->__urlTestFlag__) {
            throw new ClientException($requestUrl, "URLTestFlagIsSet");
        }

        $httpResponse = CHttp::curl(
            $requestUrl,
            $request->getMethod(),
            $request->getBodyParameter() ?: $request->getContent(),
            $request->getHeaders()
        );

        //失败重新请求
        $retryTimes = 1;
        while (!$httpResponse->isSuccess() && $autoRetry && $retryTimes < $maxRetryNumber) {
            $requestUrl = $request->composeUrl($signer, $credential);
            $httpResponse = CHttp::curl(
                $requestUrl,
                $request->getMethod(),
                $request->getBodyParameter() ?: $request->getContent(),
                $request->getHeaders()
            );
            ++ $retryTimes;
        }

        return $httpResponse;
    }
    
    /**
     * 通信准备
     * @param  object $request
     * @return mixed
     */
    private function prepareRequest($request)
    {
        if (null == $request->getRegionId()) {
            $request->setRegionId($this->clientProfile->getRegionId());
        }
        if (null == $request->getMethod()) {
            $request->setMethod('GET');
        }

        return $request;
    }

    /**
     * 处理通信异常信息
     * @param  object  $respObject 通信对象
     * @param  integer $httpStatus 返回码
     * @return ServerException
     */
    private function buildApiException($respObject, $httpStatus)
    {
        $message = 'ErrorMessage';
        $code = 'ErrorCode';
        $requestId = 'ErrorRequestId';
        if (is_object($respObject)) {
            if (property_exists($respObject, 'ErrorMessage')) {
                $message = $respObject->ErrorMessage;
            } elseif (property_exists($respObject, 'Message')) {
                $message = $respObject->Message;
            } elseif (property_exists($respObject, 'error')) {
                $message = $respObject->error;
            }
            if (property_exists($respObject, 'Code')) {
                $code = $respObject->Code;
            }
            if (property_exists($respObject, 'RequestId')) {
                $requestId = $respObject->RequestId;
            }
        }
        throw new ServerException($message, $code, $httpStatus, $requestId);
    }
    
    /**
     * 处理通信返回信息，目前只支持json
     * @param  string $body 通信返回信息
     * @return mixed
     */
    private function parseResponse($body)
    {
        return json_decode($body);
    }
}
