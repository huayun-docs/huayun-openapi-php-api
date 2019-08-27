<?php
/**
 * 修改负载均衡器实例规格
 * @author Tu
 */
namespace ChinacApi\Clb\V10;

use ChinacApi\Core\RpcRequest;

class ResizeLoadBalancer extends RpcRequest
{
    /**
     * 均衡器Id *(星号为必须，下同)
     * @var string
     */
    private $id;

    /**
     * 均衡器型号 *(星号为必填，下同)
     * @var string
     */
    private $loadBalancerType;

    function  __construct()
    {
        parent::__construct('Clb', '1.0', 'ResizeLoadBalancer');
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

    public function getLoadBalancerType()
    {
        return $this->loadBalancerType;
    }

    public function setLoadBalancerType($loadBalancerType)
    {
        $this->loadBalancerType = $loadBalancerType;
        $this->queryParameters['LoadBalancerType'] = $loadBalancerType;
        return $this;
    }
}
