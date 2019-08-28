<?php
/**
 * 创建云主机快照
 * @author Tu
 */
namespace ChinacApi\Ecs\V10;

use ChinacApi\Core\RpcRequest;

class CreateInstanceSnapshot extends RpcRequest
{
    function  __construct()
    {
        parent::__construct('Ecs', '1.0', 'CreateInstanceSnapshot');
        $this->queryParameters['CreateType'] = 'CUSTOMER';
    }

    /**
     * 主机Id
     * @var string
     */
    private $instanceId;

    /**
     * 快照创建类型，目前只能取值CUSTOMER
     * @var string
     */
    private $createType;

    /**
     * 快照名称
     * @var string
     */
    private $name;

    /**
     * 快照描述
     * @var string
     */
    private $description;

    public function getInstanceId()
    {
        return $this->instanceId;
    }

    public function setInstanceId($instanceId)
    {
        $this->instanceId = $instanceId;
        $this->queryParameters['InstanceId'] = $instanceId;
        return $this;
    }

    public function getCreateType()
    {
        return $this->createType;
    }

    public function setCreateType($createType)
    {
        $this->createType = $createType;
        $this->queryParameters['CreateType'] = $createType;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        $this->queryParameters['Name'] = $name;
        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
        $this->queryParameters['Description'] = $description;
        return $this;
    }
}
