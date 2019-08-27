<?php
/**
 * 变更负载均衡器实例私有网络
 * @author Tu
 */
namespace ChinacApi\Clb\V10;

use ChinacApi\Core\RpcRequest;

class ChangeLoadBalancerInterface extends RpcRequest
{
    /**
     * 均衡器Id *(星号为必须，下同)
     * @var string
     */
    private $loadBalancerId;

    /**
     * 旧私网Id *
     * @var string
     */
    private $oldNetworkId;

    /**
     * 新私网Id *
     * @var string
     */
    private $newNetworkId;

    /**
     * 新私网IP
     * @var string
     */
    private $networkIpAddress;

    function  __construct()
    {
        parent::__construct('Clb', '1.0', 'ChangeLoadBalancerInterface');
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

    public function getOldNetworkId()
    {
        return $this->oldNetworkId;
    }

    public function setOldNetworkId($oldNetworkId)
    {
        $this->oldNetworkId = $oldNetworkId;
        $this->queryParameters['OldNetworkId'] = $oldNetworkId;
        return $this;
    }

    public function getNewNetworkId()
    {
        return $this->newNetworkId;
    }

    public function setNewNetworkId($newNetworkId)
    {
        $this->newNetworkId = $newNetworkId;
        $this->queryParameters['NewNetworkId'] = $newNetworkId;
        return $this;
    }

    public function getNetworkIpAddress()
    {
        return $this->networkIpAddress;
    }

    public function setNetworkIpAddress($networkIpAddress)
    {
        $this->networkIpAddress = $networkIpAddress;
        $this->queryParameters['NetworkIpAddress'] = $networkIpAddress;
        return $this;
    }
}
