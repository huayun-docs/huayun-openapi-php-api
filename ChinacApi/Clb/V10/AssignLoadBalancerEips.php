<?php
/**
 * 负载均衡器绑定外部IP地址
 * @author Tu
 */
namespace ChinacApi\Clb\V10;

use ChinacApi\Core\RpcRequest;

class AssignLoadBalancerEips extends RpcRequest
{
    /**
     * 均衡器Id *(星号为必须，下同)
     * @var string
     */
    private $loadBalancerId;

    /**
     * 要绑定的均衡器外部IP *
     * @var string
     */
    private $eip0;

    function  __construct()
    {
        parent::__construct('Clb', '1.0', 'AssignLoadBalancerEips');
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

    public function getEip0()
    {
        return $this->eip0;
    }

    public function setEip0($eip0)
    {
        $this->eip0 = $eip0;
        $this->queryParameters['Eip.0'] = $eip0;
        return $this;
    }
}
