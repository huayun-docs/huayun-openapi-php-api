<?php
/**
 * 修改云主机名称
 * @author Tu
 */
namespace ChinacApi\Ecs\V10;

use ChinacApi\Core\RpcRequest;

class ModifyInstanceAttributes extends RpcRequest
{
	function  __construct()
	{
		parent::__construct('Ecs', '1.0', 'ModifyInstanceAttributes');
	}

	/**
	 * 主机Id
	 * @var string
	 */
	private $id;

	/**
	 * 主机名称
	 * @var string
	 */
	private $name;

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
}
