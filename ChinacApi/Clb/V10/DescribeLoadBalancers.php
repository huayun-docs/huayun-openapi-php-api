<?php
/**
 * 查询负载均衡器
 * @author Tu
 */
namespace ChinacApi\Clb\V10;

use ChinacApi\Core\RpcRequest;

class DescribeLoadBalancers extends RpcRequest
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
     * 付费类型
     * 按量付费ONDEMAND 包年包月PREPAID 试用PROBATION
     * @var string
     */
    private $payType;

    /**
     * 产品状态
     * NORMAL-正常，OVERTIMER-过期，ARREARAGE-欠费
     * @var string
     */
    private $productStatus;

    /**
     * 状态
     * CREATING ：创建中 ACTIVE：启用 ERROR：错误 UPDATING：更新中
     * DELETING：删除中 NEED_UPDATE：需要更新
     * @var string
     */
    private $status;

    /**
     * 均衡器到期开始时间
     * 格式yyyy-MM-dd HH:mm:ss
     * @var string
     */
    private $dueStartTime;

    /**
     * 均衡器到期结束时间
     * 格式yyyy-MM-dd HH:mm:ss
     * @var string
     */
    private $dueEndTime;

    /**
     * 均衡器是否锁住
     * @var string
     */
    private $locked;

    /**
     * 均衡器证书ID
     * @var string
     */
    private $pemId;

    /**
     * 均衡器Id
     * @var string
     */
    private $id0;

    /**
     * 均衡器外部IP
     * @var string
     */
    private $eip0;

    /**
     * 均衡器名称
     * @var string
     */
    private $name;

    function  __construct()
    {
        parent::__construct('Clb', '1.0', 'DescribeLoadBalancers');
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

    public function getLocked()
    {
        return $this->locked;
    }

    public function setLocked($locked)
    {
        $this->locked = $locked;
        $this->queryParameters['Locked'] = $locked;
        return $this;
    }

    public function getPemId()
    {
        return $this->pemId;
    }

    public function setPemId($pemId)
    {
        $this->pemId = $pemId;
        $this->queryParameters['PemId'] = $pemId;
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
}
