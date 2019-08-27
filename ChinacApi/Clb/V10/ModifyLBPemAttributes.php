<?php
/**
 * 修改负载均衡器证书信息
 * 最好用post请求
 * @author Tu
 */
namespace ChinacApi\Clb\V10;

use ChinacApi\Core\RpcRequest;

class ModifyLBPemAttributes extends RpcRequest
{
    /**
     * 证书ID *(星号为必须，下同)
     * @var string
     */
    private $id;

    /**
     * 证书内容
     * @var string
     */
    private $certificate;

    /**
     * 名称
     * @var string
     */
    private $name;

    /**
     * 描述
     * @var string
     */
    private $description;

    function  __construct()
    {
        parent::__construct('Clb', '1.0', 'ModifyLBPemAttributes');
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        $this->queryParameters['Id'] = $id;
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
}
