<?php
/**
 * 创建自定义镜像
 * @author Tu
 */
namespace ChinacApi\Ecs\V10;

use ChinacApi\Core\RpcRequest;

class CaptureInstance extends RpcRequest
{
    function  __construct()
    {
        parent::__construct('Ecs', '1.0', 'CaptureInstance');
    }

    /**
     * 云主机Id *(星号为必填，下同)
     * @var string
     */
    private $instanceId;

    /**
     * 后端卷类型 *
     * @var string
     */
    private $volumeType0;

    /**
     * 镜像名称
     * @var string
     */
    private $name;

    /**
     * 镜像描述
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

    public function getVolumeType0()
    {
        return $this->volumeType0;
    }

    public function setVolumeType0($volumeType0)
    {
        $this->volumeType0 = $volumeType0;
        $this->queryParameters['VolumeType.0'] = $volumeType0;
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
