<?php
/**
 * 查询路由器
 * @author Tu
 */
namespace ChinacApi\Vpc\V10;

use ChinacApi\Core\RpcRequest;

class DescribeRouters extends RpcRequest
{
	function  __construct()
	{
		parent::__construct('Vpc', '1.0', 'DescribeRouters');
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
	 * 路由器Id
	 * @var string
	 */
	private $id0;

	/**
	 * 路由器名称
	 * @var string
	 */
	private $name0;

	/**
	 * 公网IP
	 * @var string
	 */
	private $eip;

	/**
	 * 路由器创建开始时间
	 * 格式yyyy-MM-dd HH:mm:ss
	 * @var string
	 */
	private $startTime;

	/**
	 * 路由器创建结束时间
	 * 格式yyyy-MM-dd HH:mm:ss
	 * @var string
	 */
	private $endTime;

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

	/**
	 * 路由器是否锁住
	 * @var string
	 */
	private $locked;

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

	public function getName0()
	{
		return $this->name0;
	}

	public function setName0($name0)
	{
		$this->name0 = $name0;
		$this->queryParameters['Name.0'] = $name0;
		return $this;
	}

	public function getEip()
	{
		return $this->eip;
	}

	public function setEip($eip)
	{
		$this->eip = $eip;
		$this->queryParameters['Eip'] = $eip;
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
