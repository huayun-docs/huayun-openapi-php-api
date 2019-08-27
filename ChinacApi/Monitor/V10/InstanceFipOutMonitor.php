<?php
/**
 * 请求查询云主机公网IP流出速率
 * @author Tu
 */
namespace ChinacApi\Monitor\V10;

use ChinacApi\Core\RpcRequest;

class InstanceFipOutMonitor extends RpcRequest
{
    /**
     * 云主机Id
     * @var string
     */
    private $id;

    /**
     * 查询开始时间，Y-m-d H:i:s格式，如2018-07-27 16:00:00
     * @var string
     */
    private $startTime;

    /**
     * 查询结束时间，Y-m-d H:i:s格式，如2018-07-27 20:00:00
     * 不得小于开始时间，距离开始时间最多30天
     * @var string
     */
    private $endTime;

    function  __construct()
    {
        parent::__construct('Monitor', '1.0', 'InstanceFipOutMonitor');
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        $this->queryParameters['Id'] = $id;
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
