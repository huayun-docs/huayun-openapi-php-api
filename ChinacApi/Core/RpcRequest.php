<?php
/**
 * 通用请求
 * @author Tu
 */
namespace ChinacApi\Core;

use ChinacApi\Core\CRequest;

abstract class RpcRequest extends CRequest
{
    protected $dateTimeFormat = 'Y-m-d\TH:i:s O';
    protected $bodyParameters = []; //用于post参数
    protected $contentType = 'application/json;charset=UTF-8';
    protected $requestUrl = null;

    function  __construct($product, $version, $actionName)
    {
        date_default_timezone_set('PRC');
        parent::__construct($product, $version, $actionName);
        $this->initialize();
    }
    
    private function initialize()
    {
        $this->headers = array_merge($this->headers, [
            'Content-Type' => $this->getContentType(),
            'Date'         => date($this->dateTimeFormat)
        ]);
    }

    private function prepareValue($value)
    {
        if (is_bool($value)) {
            if ($value) {
                return 'true';
            } else {
                return 'false';
            }
        } else {
            return $value;
        }
    }

    public function composeUrl($signer, $credential)
    {
        $params = parent::getQueryParameters();
        foreach ($params as $key => $value) {
            $params[$key] = $this->prepareValue($value);
        }
        $common = [
            'Region'      => $this->getRegionId(),
            'AccessKeyId' => $credential->getAccessKeyId(),
            'Date'        => $this->headers['Date'],
            'Action'      => $this->getActionName(),
            'Version'     => $this->getVersion()
        ];
        $params = array_merge_recursive($common, $params);
        $requestUrl = rtrim($this->requestUrl ?: HTTP_REQUEST_URL, '/') . '/';
        if (parent::getMethod() != 'GET') {
            $this->bodyParameters = json_encode($params);
            $params = $common;
        }
        ksort($params);
        $signature = $this->computeSignature($params, $credential->getAccessSecret(), $signer);
        $requestUrl .= '?' . http_build_query($params, '', '&', PHP_QUERY_RFC3986);
        $requestUrl .= '&Signature=' . $signature;

        return $requestUrl;
    }

    private function computeSignature($parameters, $accessKeySecret, $signer)
    {
        $stringToSign = parent::getMethod() . "\n";
        $stringToSign .= md5(http_build_query($parameters, '', '&', PHP_QUERY_RFC3986)) . "\n";
        $stringToSign .= $this->getContentType() . "\n";
        $stringToSign .= rawurlencode($parameters['Date']) . "\n";

        $signature = $this->percentEncode($signer->signString($stringToSign, $accessKeySecret));

        return $signature;
    }

    protected function percentEncode($str)
    {
        $res = urlencode($str);
        $res = preg_replace('/\+/', '%20', $res);
        $res = preg_replace('/\*/', '%2A', $res);
        $res = preg_replace('/%7E/', '~', $res);
        return $res;
    }

    public function getBodyParameter()
    {
        return $this->bodyParameters;
    }

    public function setOldVersion()
    {
        $this->requestUrl = HTTP_REQUEST_URL_OLD;
        return $this;
    }

    public function setV2Version()
    {
        $this->requestUrl = HTTP_REQUEST_URL;
        return $this;
    }

    /**
     * 设置参数便捷方式
     */
    public function __call($name, $arguments)
    {
        if (!empty($arguments[0])) {
            $name = ucfirst($name);
            $name = strtr($name, ['Nindex'=>'.']);
            $this->queryParameters[$name] = $arguments[0];
        }
        return $this;
    }
}
