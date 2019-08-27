<?php
/**
 * 创建负载均衡器实例后端服务
 * @author Tu
 */
namespace ChinacApi\Clb\V10;

use ChinacApi\Core\RpcRequest;

class CreateLBBackend extends RpcRequest
{
    /**
     * ip地址 *(星号为必须，下同)
     * @var string
     */
    private $address;

    /**
     * 端口 *
     * @var string
     */
    private $port;

    /**
     * 监听器ID *
     * @var string
     */
    private $listenerId;

    /**
     * 权重 *
     * @var integer
     */
    private $weight;

    /**
     * 名称
     * @var string
     */
    private $name;

    /**
     * 策略ID
     * @var string
     */
    private $policyId;

    /**
     * 是否启用，默认为 true
     * @var string
     */
    private $enabled;

    function  __construct()
    {
        parent::__construct('Clb', '1.0', 'CreateLBBackend');
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
        $this->queryParameters['Address'] = $address;
        return $this;
    }

    public function getPort()
    {
        return $this->port;
    }

    public function setPort($port)
    {
        $this->port = $port;
        $this->queryParameters['Port'] = $port;
        return $this;
    }

    public function getListenerId()
    {
        return $this->listenerId;
    }

    public function setListenerId($listenerId)
    {
        $this->listenerId = $listenerId;
        $this->queryParameters['ListenerId'] = $listenerId;
        return $this;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
        $this->queryParameters['Weight'] = $weight;
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

    public function getPolicyId()
    {
        return $this->policyId;
    }

    public function setPolicyId($policyId)
    {
        $this->policyId = $policyId;
        $this->queryParameters['PolicyId'] = $policyId;
        return $this;
    }

    public function getEnabled()
    {
        return $this->enabled;
    }

    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
        $this->queryParameters['Enabled'] = $enabled;
        return $this;
    }
}
