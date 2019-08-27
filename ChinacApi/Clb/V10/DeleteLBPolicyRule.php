<?php
/**
 * 删除负载均衡器实例转发策略规则
 * @author Tu
 */
namespace ChinacApi\Clb\V10;

use ChinacApi\Core\RpcRequest;

class DeleteLBPolicyRule extends RpcRequest
{
    /**
     * 规则Id *(星号为必须，下同)
     * @var string
     */
    private $id;

    function  __construct()
    {
        parent::__construct('Clb', '1.0', 'DeleteLBPolicyRule');
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
}
