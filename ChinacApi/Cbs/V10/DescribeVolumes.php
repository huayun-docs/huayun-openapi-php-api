<?php
/**
 * 查询云硬盘
 * @author Tu
 */
namespace ChinacApi\Cbs\V10;

use ChinacApi\Core\RpcRequest;

class DescribeVolumes extends RpcRequest
{
    function  __construct()
    {
        parent::__construct('Cbs', '1.0', 'DescribeVolumes');
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
     * 云硬盘Id
     * @var string
     */
    private $id0;

    /**
     * 云硬盘名称
     * @var string
     */
    private $name;

    /**
     * 付费类型
     * 按量付费ONDEMAND 包年包月PREPAID 试用PROBATION
     * @var string
     */
    private $payType;

    /**
     * 卷类型
     * @var string
     */
    private $productType;

    /**
     * 状态
     * CREATING AVAILABLE DETACHING ATTACHING ATTACHED DELETING
     * ERROR DELETE_ERROR DELETED MIGRATING RESIZING
     * @var string
     */
    private $status;

    /**
     * 产品状态
     * NORMAL-正常，OVERTIMER-过期，ARREARAGE-欠费
     * @var string
     */
    private $productStatus;

    /**
     * 云主机名称
     * @var string
     */
    private $instanceName;

    /**
     * 云硬盘到期开始时间
     * 格式yyyy-MM-dd HH:mm:ss
     * @var string
     */
    private $dueStartTime;

    /**
     * 云硬盘到期结束时间
     * 格式yyyy-MM-dd HH:mm:ss
     * @var string
     */
    private $dueEndTime;

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

    public function getProductType()
    {
        return $this->productType;
    }

    public function setProductType($productType)
    {
        $this->productType = $productType;
        $this->queryParameters['ProductType'] = $productType;
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

    public function getInstanceName()
    {
        return $this->instanceName;
    }

    public function setInstanceName($instanceName)
    {
        $this->instanceName = $instanceName;
        $this->queryParameters['InstanceName'] = $instanceName;
        return $this;
    }

    public function getDueStartTime()
    {
        return $this->dueStartTime;
    }

    public function setDueStartTime($dueStartTime)
    {
        $this->dueStartTime = $dueStartTime;
        $this->queryParameters['DueStartTime'] = $dueStartTime;
        return $this;
    }

    public function getDueEndTime()
    {
        return $this->dueEndTime;
    }

    public function setDueEndTime($dueEndTime)
    {
        $this->dueEndTime = $dueEndTime;
        $this->queryParameters['DueEndTime'] = $dueEndTime;
        return $this;
    }
}
