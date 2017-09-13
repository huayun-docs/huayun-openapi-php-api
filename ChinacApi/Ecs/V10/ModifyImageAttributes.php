<?php
/**
 * 修改自定义镜像名称、描述
 * @author Tu
 */
namespace ChinacApi\Ecs\V10;

use ChinacApi\Core\RpcRequest;

class ModifyImageAttributes extends RpcRequest
{
	function  __construct()
	{
		parent::__construct('Ecs', '1.0', 'ModifyImageAttributes');
	}

	/**
	 * 镜像Id *(星号为必填，下同)
	 * @var string
	 */
	private $id;

	/**
	 * 镜像名称 *|(名称和描述必须有一个)
	 * @var string
	 */
	private $name;

	/**
	 * 镜像描述
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
