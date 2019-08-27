<?php
/**
 * 查询负载均衡器实例已加入的私有网络
 * @author Tu
 */
namespace ChinacApi\Clb\V10;

use ChinacApi\Core\RpcRequest;

class DescribeLoadBalancerInterfaces extends RpcRequest
{
    /**
     * 网卡Id
     * @var string
     */
    private $id0;

    /**
     * 均衡器id
     * @var string
     */
    private $loadBalancer0;

    /**
     * 内网IP地址
     * @var string
     */
    private $ipAddress0;

    /**
     * 私网Id
     * @var string
     */
    private $networkId;

    function  __construct()
    {
        parent::__construct('Clb', '1.0', 'DescribeLoadBalancerInterfaces');
    }

    public function getId0()
    {
        return $this->id0;
    }

    public function setId0($id0)
    {
        $this->id0 = $id0;
        $this->queryParameters['Id.0'] = $id0;
        return $this;
    }

    public function getLoadBalancer0()
    {
        return $this->loadBalancer0;
    }

    public function setLoadBalancer0($loadBalancer0)
    {
        $this->loadBalancer0 = $loadBalancer0;
        $this->queryParameters['LoadBalancer.0'] = $loadBalancer0;
        return $this;
    }

    public function getIpAddress0()
    {
        return $this->ipAddress0;
    }

    public function setIpAddress0($ipAddress0)
    {
        $this->ipAddress0 = $ipAddress0;
        $this->queryParameters['IpAddress.0'] = $ipAddress0;
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
}
