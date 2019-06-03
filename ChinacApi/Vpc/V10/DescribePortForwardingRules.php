<?php
/**
 * 查询路由器端口转发规则信息
 * @author Tu
 */
namespace ChinacApi\Vpc\V10;

use ChinacApi\Core\RpcRequest;

class DescribePortForwardingRules extends RpcRequest
{
    function  __construct()
    {
        parent::__construct('Vpc', '1.0', 'DescribePortForwardingRules');
    }

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
     * 规则Id
     * @var string
     */
    private $id0;

    /**
     * 路由器Id
     * @var string
     */
    private $routerId0;

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

    public function getRouterId0()
    {
        return $this->routerId0;
    }

    public function setRouterId0($routerId0)
    {
        $this->routerId0 = $routerId0;
        $this->queryParameters['RouterId.0'] = $routerId0;
        return $this;
    }
}
