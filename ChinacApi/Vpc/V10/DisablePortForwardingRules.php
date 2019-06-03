<?php
/**
 * 禁用路由器转发规则
 * @author Tu
 */
namespace ChinacApi\Vpc\V10;

use ChinacApi\Core\RpcRequest;

class DisablePortForwardingRules extends RpcRequest
{
    function  __construct()
    {
        parent::__construct('Vpc', '1.0', 'DisablePortForwardingRules');
    }

    /**
     * 规则Id *(星号为必填，下同)
     * @var string
     */
    private $id0;

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
}
