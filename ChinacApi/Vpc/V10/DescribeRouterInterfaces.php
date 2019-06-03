<?php
/**
 * 查询路由器私有网络网卡信息
 * @author Tu
 */
namespace ChinacApi\Vpc\V10;

use ChinacApi\Core\RpcRequest;

class DescribeRouterInterfaces extends RpcRequest
{
    function  __construct()
    {
        parent::__construct('Vpc', '1.0', 'DescribeRouterInterfaces');
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
     * 网卡Id
     * @var string
     */
    private $id0;

    /**
     * 路由器Id
     * @var string
     */
    private $routerId0;

    /**
     * 私网Ip
     * @var string
     */
    private $ipAddress0;

    /**
     * 私有网络Id
     * @var string
     */
    private $networkId0;

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

    public function getIpAddress0()
    {
        return $this->ipAddress0;
    }

    public function setIpAddress0($ipAddress0)
    {
        $this->ipAddress0 = $ipAddress0;
        $this->queryParameters['IpAddress.0'] = $ipAddress0;
        return $this;
    }

    public function getNetworkId0()
    {
        return $this->networkId0;
    }

    public function setNetworkId0($networkId0)
    {
        $this->networkId0 = $networkId0;
        $this->queryParameters['NetworkId.0'] = $networkId0;
        return $this;
    }
}
