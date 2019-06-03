<?php
/**
 * 查询云硬盘快照
 * @author Tu
 */
namespace ChinacApi\Cbs\V10;

use ChinacApi\Core\RpcRequest;

class DescribeSnapshots extends RpcRequest
{
    function  __construct()
    {
        parent::__construct('Cbs', '1.0', 'DescribeSnapshots');
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
     * 快照Id
     * @var string
     */
    private $id0;

    /**
     * 云硬盘Id
     * @var string
     */
    private $volumeId;

    /**
     * 快照名称
     * @var string
     */
    private $name;

    /**
     * 创建开始时间
     * 格式yyyy-MM-dd HH:mm:ss
     * @var string
     */
    private $startTime;

    /**
     * 创建结束时间
     * 格式yyyy-MM-dd HH:mm:ss
     * @var string
     */
    private $endTime;

    /**
     * 是否锁住
     * @var string
     */
    private $isLocked;

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

    public function getVolumeId()
    {
        return $this->volumeId;
    }

    public function setVolumeId($volumeId)
    {
        $this->volumeId = $volumeId;
        $this->queryParameters['VolumeId'] = $volumeId;
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

    public function getIsLocked()
    {
        return $this->isLocked;
    }

    public function setIsLocked($isLocked)
    {
        $this->isLocked = $isLocked;
        $this->queryParameters['IsLocked'] = $isLocked;
        return $this;
    }
}
