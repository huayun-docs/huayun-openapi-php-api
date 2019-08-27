<?php
/**
 * 查询负载均衡器监听器信息
 * @author Tu
 */
namespace ChinacApi\Clb\V10;

use ChinacApi\Core\RpcRequest;

class DescribeLBListeners extends RpcRequest
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
     * 监听器Id
     * @var string
     */
    private $id0;

    /**
     * 均衡器id
     * @var string
     */
    private $loadBalancer0;

    /**
     * 协议,可选择值：HTTP HTTPS TCP
     * @var string
     */
    private $protocol0;

    /**
     * 监听的端口
     * @var string
     */
    private $port;

    function  __construct()
    {
        parent::__construct('Clb', '1.0', 'DescribeLBListeners');
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

    public function getLoadBalancer0()
    {
        return $this->loadBalancer0;
    }

    public function setLoadBalancer0($loadBalancer0)
    {
        $this->loadBalancer0 = $loadBalancer0;
        $this->queryParameters['LoadBalancer.0'] = $loadBalancer0;
        return $this;
    }

    public function getProtocol0()
    {
        return $this->protocol0;
    }

    public function setProtocol0($protocol0)
    {
        $this->protocol0 = $protocol0;
        $this->queryParameters['Protocol.0'] = $protocol0;
        return $this;
    }

    public function getPort()
    {
        return $this->port;
    }

    public function setPort($port)
    {
        $this->port = $port;
        $this->queryParameters['Port'] = $port;
        return $this;
    }
}
