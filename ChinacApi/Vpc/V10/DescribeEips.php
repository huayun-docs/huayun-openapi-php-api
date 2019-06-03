<?php
/**
 * 查询公网IP
 * @author Tu
 */
namespace ChinacApi\Vpc\V10;

use ChinacApi\Core\RpcRequest;

class DescribeEips extends RpcRequest
{
    function  __construct()
    {
        parent::__construct('Vpc', '1.0', 'DescribeEips');
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
     * 公网IP
     * @var string
     */
    private $eip0;

    /**
     * IP名称
     * @var string
     */
    private $name;

    /**
     * 状态
     * 闲置IDLE 已用ASSIGNED 锁定LOCKED 被封BLOCKED
     * @var string
     */
    private $status;

    /**
     * IP到期开始时间
     * 格式yyyy-MM-dd HH:mm:ss
     * @var string
     */
    private $startTime;

    /**
     * IP到期结束时间
     * 格式yyyy-MM-dd HH:mm:ss
     * @var string
     */
    private $endTime;

    /**
     * IP购买开始时间
     * 格式yyyy-MM-dd HH:mm:ss
     * @var string
     */
    private $allocateStartTime;

    /**
     * IP购买结束时间
     * 格式yyyy-MM-dd HH:mm:ss
     * @var string
     */
    private $allocateEndTime;

    /**
     * 产品状态
     * NORMAL-正常，OVERTIMER-过期，ARREARAGE-欠费
     * @var string
     */
    private $productStatus;

    /**
     * 付费类型
     * 包年包月PREPAID 试用PROBATION
     * @var string
     */
    private $payType;

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

    public function getEip0()
    {
        return $this->eip0;
    }

    public function setEip0($eip0)
    {
        $this->eip0 = $eip0;
        $this->queryParameters['Eip.0'] = $eip0;
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

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
        $this->queryParameters['Status'] = $status;
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

    public function getAllocateStartTime()
    {
        return $this->allocateStartTime;
    }

    public function setAllocateStartTime($allocateStartTime)
    {
        $this->allocateStartTime = $allocateStartTime;
        $this->queryParameters['AllocateStartTime'] = $allocateStartTime;
        return $this;
    }

    public function getAllocateEndTime()
    {
        return $this->allocateEndTime;
    }

    public function setAllocateEndTime($allocateEndTime)
    {
        $this->allocateEndTime = $allocateEndTime;
        $this->queryParameters['AllocateEndTime'] = $allocateEndTime;
        return $this;
    }

    public function getProductStatus()
    {
        return $this->productStatus;
    }

    public function setProductStatus($productStatus)
    {
        $this->productStatus = $productStatus;
        $this->queryParameters['ProductStatus'] = $productStatus;
        return $this;
    }

    public function getPayType()
    {
        return $this->payType;
    }

    public function setPayType($payType)
    {
        $this->payType = $payType;
        $this->queryParameters['PayType'] = $payType;
        return $this;
    }
}
