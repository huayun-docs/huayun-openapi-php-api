<?php
/**
 * 请求云主机列表、详情
 * @author Tu
 */
namespace ChinacApi\Ecs\V10;

use ChinacApi\Core\RpcRequest;

class DescribeInstances extends RpcRequest
{
	function  __construct()
	{
		parent::__construct('Ecs', '1.0', 'DescribeInstances');
	}

	/**
	 * 主机Id
	 * @var string
	 */
	private $id0;

	/**
	 * 主机名称
	 * @var string
	 */
	private $name;

	/**
	 * 状态
	 * 开机：START 关机：STOP 异常：ERROR 创建中：CREATING 开机中：STARTING 关机中：STOPING
	 * 暂停中：PAUSING 已暂停：PAUSED 取消暂停中：UNPAUSING 重启中：REBOOTING
	 * 修改配置中:RESIZING 迁移中：MIGRATE 删除中：DELETING 删除错误：DELETE_ERROR
	 * 重装中：REBUILDING 创建失败：CREATE_ERROR 快照还原中：ROLLING_BACK
	 * @var string
	 */
	private $status;

	/**
	 * 防火墙Id
	 * @var string
	 */
	private $firewallId0;

	/**
	 * 云主机创建开始时间
	 * 格式yyyy-MM-dd HH:mm:ss
	 * @var string
	 */
	private $startTime;

	/**
	 * 云主机创建结束时间
	 * 格式yyyy-MM-dd HH:mm:ss
	 * @var string
	 */
	private $endTime;

	/**
	 * 云主机到期开始时间
	 * 格式yyyy-MM-dd HH:mm:ss
	 * @var string
	 */
	private $dueStartTime;

	/**
	 * 云主机到期结束时间
	 * 格式yyyy-MM-dd HH:mm:ss
	 * @var string
	 */
	private $dueEndTime;

	/**
	 * 产品状态
	 * NORMAL-正常，OVERTIMER-过期，ARREARAGE-欠费
	 * @var string
	 */
	private $productStatus;

	/**
	 * 付费类型
	 * 按量付费ONDEMAND 包年包月PREPAID 试用PROBATION
	 * @var string
	 */
	private $payType;

	/**
	 * 镜像Id
	 * @var string
	 */
	private $imageId;

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
	 * 主机系列
	 * SERIES_STANDARD,SERIES_SUPERCOMPUTER,SERIES_SUPERNETWORK
	 * @var string
	 */
	private $instanceSeries;

	/**
	 * 云主机是否锁住
	 * @var string
	 */
	private $locked;

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

	public function getFirewallId0()
	{
		return $this->firewallId0;
	}

	public function setFirewallId0($firewallId0)
	{
		$this->firewallId0 = $firewallId0;
		$this->queryParameters['FirewallId.0'] = $firewallId0;
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

	public function getImageId()
	{
		return $this->imageId;
	}

	public function setImageId($imageId)
	{
		$this->imageId = $imageId;
		$this->queryParameters['ImageId'] = $imageId;
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

	public function getInstanceSeries()
	{
		return $this->instanceSeries;
	}

	public function setInstanceSeries($instanceSeries)
	{
		$this->instanceSeries = $instanceSeries;
		$this->queryParameters['InstanceSeries'] = $instanceSeries;
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
}
