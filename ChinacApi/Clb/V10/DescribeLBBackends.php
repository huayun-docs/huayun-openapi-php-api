<?php
/**
 * 查询负载均衡器实例后端服务
 * @author Tu
 */
namespace ChinacApi\Clb\V10;

use ChinacApi\Core\RpcRequest;

class DescribeLBBackends extends RpcRequest
{
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
     * 后端服务Id
     * @var string
     */
    private $id0;

    /**
     * 名称
     * @var string
     */
    private $name;

    /**
     * 是否启用
     * @var string
     */
    private $enabled;

    /**
     * 监听器ID
     * @var string
     */
    private $listenerId;

    /**
     * 均衡器ID
     * @var string
     */
    private $lBId;

    function  __construct()
    {
        parent::__construct('Clb', '1.0', 'DescribeLBBackends');
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

    public function getEnabled()
    {
        return $this->enabled;
    }

    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
        $this->queryParameters['Enabled'] = $enabled;
        return $this;
    }

    public function getListenerId()
    {
        return $this->listenerId;
    }

    public function setListenerId($listenerId)
    {
        $this->listenerId = $listenerId;
        $this->queryParameters['ListenerId'] = $listenerId;
        return $this;
    }

    public function getlBId()
    {
        return $this->lBId;
    }

    public function setlBId($lBId)
    {
        $this->lBId = $lBId;
        $this->queryParameters['lBId'] = $lBId;
        return $this;
    }
}
