<?php
/**
 * 创建云硬盘
 * @author Tu
 */
namespace ChinacApi\Cbs\V10;

use ChinacApi\Core\RpcRequest;

class CreateVolume extends RpcRequest
{
	function  __construct()
	{
		parent::__construct('Cbs', '1.0', 'CreateVolume');
	}

	/**
	 * 付费类型 *(星号为必填，下同)
	 * 按量付费ONDEMAND 包年包月PREPAID 试用PROBATION
	 * @var string
	 */
	private $payType;

	/**
	 * 云硬盘名称
	 * @var string
	 */
	private $name;

	/**
	 * 云硬盘描述
	 * @var string
	 */
	private $describe;

	/**
	 * 云硬盘大小 *|(某些条件必须)
	 * 新创建的云硬盘此参数必须，复制的比原先的要大或等于
	 * @var integer
	 */
	private $size;

	/**
	 * 卷类型 *|
	 * 新创建的云硬盘此参数必须
	 * @var string
	 */
	private $type;

	/**
	 * 用于创建云硬盘的快照Id
	 * @var string
	 */
	private $snapshotId;

	/**
	 * 要复制的云硬盘Id
	 * @var string
	 */
	private $sourceVolumeId;

	/**
	 * 指定创建云硬盘的镜像Id
	 * @var string
	 */
	private $imageId;

	/**
	 * 购买包年月月数
	 * @var integer
	 */
	private $period;

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

	public function getDescribe()
	{
		return $this->describe;
	}

	public function setDescribe($describe)
	{
		$this->describe = $describe;
		$this->queryParameters['Describe'] = $describe;
		return $this;
	}

	public function getSize()
	{
		return $this->size;
	}

	public function setSize($size)
	{
		$this->size = $size;
		$this->queryParameters['Size'] = $size;
		return $this;
	}

	public function getType()
	{
		return $this->type;
	}

	public function setType($type)
	{
		$this->type = $type;
		$this->queryParameters['Type'] = $type;
		return $this;
	}

	public function getSnapshotId()
	{
		return $this->snapshotId;
	}

	public function setSnapshotId($snapshotId)
	{
		$this->snapshotId = $snapshotId;
		$this->queryParameters['SnapshotId'] = $snapshotId;
		return $this;
	}

	public function getSourceVolumeId()
	{
		return $this->sourceVolumeId;
	}

	public function setSourceVolumeId($sourceVolumeId)
	{
		$this->sourceVolumeId = $sourceVolumeId;
		$this->queryParameters['SourceVolumeId'] = $sourceVolumeId;
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

	public function getPeriod()
	{
		return $this->period;
	}

	public function setPeriod($period)
	{
		$this->period = $period;
		$this->queryParameters['Period'] = $period;
		return $this;
	}
}
