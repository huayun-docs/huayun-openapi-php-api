<?php
/**
 * 路由器绑定公网IP
 * @author Tu
 */
namespace ChinacApi\Vpc\V10;

use ChinacApi\Core\RpcRequest;

class AssignRouterEip extends RpcRequest
{
    function  __construct()
    {
        parent::__construct('Vpc', '1.0', 'AssignRouterEip');
    }

    /**
     * 路由器Id *(星号为必填，下同)
     * @var string
     */
    private $routerId;

    /**
     * 公网IP *
     * @var string
     */
    private $eip;

    public function getRouterId()
    {
        return $this->routerId;
    }

    public function setRouterId($routerId)
    {
        $this->routerId = $routerId;
        $this->queryParameters['RouterId'] = $routerId;
        return $this;
    }

    public function getEip()
    {
        return $this->eip;
    }

    public function setEip($eip)
    {
        $this->eip = $eip;
        $this->queryParameters['Eip'] = $eip;
        return $this;
    }
}
