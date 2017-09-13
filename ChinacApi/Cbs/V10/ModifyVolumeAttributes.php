<?php
/**
 * 修改云硬盘名称、描述
 * @author Tu
 */
namespace ChinacApi\Cbs\V10;

use ChinacApi\Core\RpcRequest;

class ModifyVolumeAttributes extends RpcRequest
{
	function  __construct()
	{
		parent::__construct('Cbs', '1.0', 'ModifyVolumeAttributes');
	}

	/**
	 * 云硬盘Id *(星号为必须，下同)
	 * @var string
	 */
	private $id;

	/**
	 * 云硬盘新名称 *|(某些条件必须)
	 * 与描述有一个必须
	 * @var string
	 */
	private $name;

	/**
	 * 云硬盘描述 *|
	 * @var string
	 */
	private $description;

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
}
