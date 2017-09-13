<?php
/**
 * 查询云主机快照
 * @author Tu
 */
namespace ChinacApi\Ecs\V10;

use ChinacApi\Core\RpcRequest;

class DescribeInstanceSnapshots extends RpcRequest
{
	function  __construct()
	{
		parent::__construct('Ecs', '1.0', 'DescribeInstanceSnapshots');
	}

	/**
	 * 云主机快照Id
	 * @var string
	 */
	private $id0;

	/**
	 * 云主机Id
	 * @var string
	 */
	private $instanceId0;

	/**
	 * 云主机快照名称
	 * @var string
	 */
	private $name;

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
	 * 状态
	 * CREATING AVAILABLE DELETING ERROR COPYING ROLLING_BACK ERROR_DELETING
	 * @var string
	 */
	private $status;

	/**
	 * 云主机快照创建开始时间
	 * 格式yyyy-MM-dd HH:mm:ss
	 * @var string
	 */
	private $startTime;

	/**
	 * 云主机快照创建结束时间
	 * 格式yyyy-MM-dd HH:mm:ss
	 * @var string
	 */
	private $endTime;

	/**
	 * 云主机快照是否锁住
	 * @var string
	 */
	private $isLocked;

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

	public function getInstanceId0()
	{
		return $this->instanceId0;
	}

	public function setInstanceId0($instanceId0)
	{
		$this->instanceId0 = $instanceId0;
		$this->queryParameters['InstanceId.0'] = $instanceId0;
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

	public function setStartTime($instanceStartTime)
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
