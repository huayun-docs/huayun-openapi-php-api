<?php
/**
 * 查询镜像
 * @author Tu
 */
namespace ChinacApi\Ecs\V10;

use ChinacApi\Core\RpcRequest;

class DescribeImages extends RpcRequest
{
    function  __construct()
    {
        parent::__construct('Ecs', '1.0', 'DescribeImages');
    }

    /**
     * 用途类型，目前只支持INSTANCE *(星号为必填，下同)
     * @var [type]
     */
    private $use;

    /**
     * 记录偏移量(页数)
     * @var string
     */
    private $offset;

    /**
     * 记录数量，不指定返回全部
     * @var string
     */
    private $count;

    /**
     * 镜像Id
     * @var string
     */
    private $id0;

    /**
     * 操作系统Id
     * @var string
     */
    private $osId;

    /**
     * 镜像名称
     * @var string
     */
    private $name;

    /**
     * 镜像类型
     * false为自定义镜像
     * @var boolean
     */
    private $shared;

    /**
     * 云主机Id，可以帅选出可以重装的镜像
     * @var string
     */
    private $instanceId;

    public function getUse()
    {
        return $this->use;
    }

    public function setUse($use)
    {
        $this->use = $use;
        $this->queryParameters['Use'] = $use;
        return $this;
    }

    public function getOffset()
    {
        return $this->offset;
    }

    public function setOffset($offset)
    {
        $this->offset = $offset;
        $this->queryParameters['Offset'] = $offset;
        return $this;
    }

    public function getCount()
    {
        return $this->count;
    }

    public function setCount($count)
    {
        $this->count = $count;
        $this->queryParameters['Count'] = $count;
        return $this;
    }

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

    public function getOsId()
    {
        return $this->osId;
    }

    public function setOsId($osId)
    {
        $this->osId = $osId;
        $this->queryParameters['OsId'] = $osId;
        return $this;
    }

    public function geName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        $this->queryParameters['Name'] = $name;
        return $this;
    }

    public function getShared()
    {
        return $this->shared;
    }

    public function setShared($shared)
    {
        $this->shared = $shared;
        $this->queryParameters['Shared'] = $shared;
        return $this;
    }

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
}
