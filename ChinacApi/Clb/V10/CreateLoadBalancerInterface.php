<?php
/**
 * 负载均衡器实例加入私有网络
 * @author Tu
 */
namespace ChinacApi\Clb\V10;

use ChinacApi\Core\RpcRequest;

class CreateLoadBalancerInterface extends RpcRequest
{
    /**
     * 均衡器Id *(星号为必须，下同)
     * @var string
     */
    private $loadBalancerId;

    /**
     * 私网Id
     * @var string
     */
    private $networkId;

    /**
     * 内网IP地址
     * @var string
     */
    private $ipAddress;

    function  __construct()
    {
        parent::__construct('Clb', '1.0', 'CreateLoadBalancerInterface');
    }

    public function getLoadBalancerId()
    {
        return $this->loadBalancerId;
    }

    public function setLoadBalancerId($loadBalancerId)
    {
        $this->loadBalancerId = $loadBalancerId;
        $this->queryParameters['LoadBalancerId'] = $loadBalancerId;
        return $this;
    }

    public function getNetworkId()
    {
        return $this->networkId;
    }

    public function setNetworkId($networkId)
    {
        $this->networkId = $networkId;
        $this->queryParameters['NetworkId'] = $networkId;
        return $this;
    }

    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;
        $this->queryParameters['IpAddress'] = $ipAddress;
        return $this;
    }
}
