<?php
/**
 * 重启云主机
 * @author Tu
 */
namespace ChinacApi\Ecs\V10;

use ChinacApi\Core\RpcRequest;

class RebootInstance extends RpcRequest
{
    function  __construct()
    {
        parent::__construct('Ecs', '1.0', 'RebootInstance');
    }

    /**
     * 主机Id *(星号为必须参数)
     * @var string
     */
    private $id;

    /**
     * 是否强制指定
     * true为硬重启,false为软重启
     * @var boolean/string
     */
    private $force;

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

    public function getForce()
    {
        return $this->force;
    }

    public function setForce($force)
    {
        $this->force = $force;
        $this->queryParameters['Force'] = $force;
        return $this;
    }
}
