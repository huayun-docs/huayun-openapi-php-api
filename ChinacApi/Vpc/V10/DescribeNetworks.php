<?php
/**
 * 查询私有网络
 * @author Tu
 */
namespace ChinacApi\Vpc\V10;

use ChinacApi\Core\RpcRequest;

class DescribeNetworks extends RpcRequest
{
	function  __construct()
	{
		parent::__construct('Vpc', '1.0', 'DescribeNetworks');
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
	 * 私网Id
	 * @var string
	 */
	private $id0;

	/**
	 * 私网名称
	 * @var string
	 */
	private $name;

	/**
	 * 私网创建开始时间
	 * 格式yyyy-MM-dd HH:mm:ss
	 * @var string
	 */
	private $startTime;

	/**
	 * 私网创建结束时间
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
