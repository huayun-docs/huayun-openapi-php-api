<?php
/**
 * 负载均衡器实例退出私有网络
 * @author Tu
 */
namespace ChinacApi\Clb\V10;

use ChinacApi\Core\RpcRequest;

class DeleteLoadBalancerInterface extends RpcRequest
{
    /**
     * 均衡器Id *(星号为必须，下同)
     * @var string
     */
    private $lBInterfaceId;

    function  __construct()
    {
        parent::__construct('Clb', '1.0', 'DeleteLoadBalancerInterface');
    }

    public function getLBInterfaceId()
    {
        return $this->lBInterfaceId;
    }

    public function setLBInterfaceId($lBInterfaceId)
    {
        $this->lBInterfaceId = $lBInterfaceId;
        $this->queryParameters['LBInterfaceId'] = $lBInterfaceId;
        return $this;
    }
}
