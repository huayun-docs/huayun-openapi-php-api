<?php
/**
 * 创建云硬盘快照
 * @author Tu
 */
namespace ChinacApi\Cbs\V10;

use ChinacApi\Core\RpcRequest;

class CreateSnapshot extends RpcRequest
{
	function  __construct()
	{
		parent::__construct('Cbs', '1.0', 'CreateSnapshot');
	}

	/**
	 * 云硬盘Id *(星号为必填，下同)
	 * @var string
	 */
	private $volumeId;

	/**
	 * 创建类型 *
	 * 目前只支持CUSTOMER
	 * @var string
	 */
	private $createType;

	/**
	 * 快照名称
	 * @var string
	 */
	private $name;

	/**
	 * 快照描述
	 * @var string
	 */
	private $description;

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

	public function getDescription()
	{
		return $this->description;
	}

	public function setDescription($description)
	{
		$this->description = $description;
		$this->queryParameters['Description'] = $description;
		return $this;
	}

	public function getCreateType()
	{
		return $this->createType;
	}

	public function setCreateType($createType)
	{
		$this->createType = $createType;
		$this->queryParameters['CreateType'] = $createType;
		return $this;
	}
}
