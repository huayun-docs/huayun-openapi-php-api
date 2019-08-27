<?php
/**
 * 创建负载均衡器实例证书
 * 最好用post请求
 * @author Tu
 */
namespace ChinacApi\Clb\V10;

use ChinacApi\Core\RpcRequest;

class CreateLBPem extends RpcRequest
{
    /**
     * 私钥内容 *(星号为必须，下同)
     * @var string
     */
    private $privateKey;

    /**
     * 证书内容 *
     * @var string
     */
    private $certificate;

    /**
     * 名称 *
     * @var string
     */
    private $name;

    /**
     * 描述
     * @var string
     */
    private $description;

    /**
     * 相关的SSL证书ID
     * @var string
     */
    private $relatedId;

    function  __construct()
    {
        parent::__construct('Clb', '1.0', 'CreateLBPem');
    }

    public function getPrivateKey()
    {
        return $this->privateKey;
    }

    public function setPrivateKey($privateKey)
    {
        $this->privateKey = $privateKey;
        $this->queryParameters['PrivateKey'] = $privateKey;
        return $this;
    }

    public function getCertificate()
    {
        return $this->certificate;
    }

    public function setCertificate($certificate)
    {
        $this->certificate = $certificate;
        $this->queryParameters['Certificate'] = $certificate;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        $this->queryParameters['Name'] = $name;
        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
        $this->queryParameters['Description'] = $description;
        return $this;
    }

    public function getRelatedId()
    {
        return $this->relatedId;
    }

    public function setRelatedId($relatedId)
    {
        $this->relatedId = $relatedId;
        $this->queryParameters['RelatedId'] = $relatedId;
        return $this;
    }
}
