<?php
/**
 * 查询防火墙
 * @author Tu
 */
namespace ChinacApi\Vpc\V10;

use ChinacApi\Core\RpcRequest;

class DescribeFirewalls extends RpcRequest
{
    function  __construct()
    {
        parent::__construct('Vpc', '1.0', 'DescribeFirewalls');
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
     * 防火墙Id
     * @var string
     */
    private $id0;

    /**
     * 防火墙名称 *(星号必须，下同)
     * @var string
     */
    private $name;

    /**
     * 防火墙创建开始时间
     * 格式yyyy-MM-dd HH:mm:ss
     * @var string
     */
    private $startTime;

    /**
     * 防火墙创建结束时间
     * 格式yyyy-MM-dd HH:mm:ss
     * @var string
     */
    private $endTime;

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

    public function getStartTime()
    {
        return $this->startTime;
    }

    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
        $this->queryParameters['StartTime'] = $startTime;
        return $this;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
        $this->queryParameters['EndTime'] = $endTime;
        return $this;
    }
}
