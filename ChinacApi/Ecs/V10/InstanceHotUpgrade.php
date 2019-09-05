<?php
/**
 * 云主机热升级，模板开启此功能，不用关机
 * @author Tu
 */
namespace ChinacApi\Ecs\V10;

use ChinacApi\Core\RpcRequest;

class InstanceHotUpgrade extends RpcRequest
{
    function  __construct()
    {
        parent::__construct('Ecs', '1.0', 'InstanceHotUpgrade');
    }

    /**
     * 主机Id
     * @var string
     */
    private $id;

    /**
     * 主机型号
     * @var string
     */
    private $instanceType;

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

    public function getInstanceType()
    {
        return $this->instanceType;
    }

    public function setInstanceType($instanceType)
    {
        $this->instanceType = $instanceType;
        $this->queryParameters['InstanceType'] = $instanceType;
        return $this;
    }
}
