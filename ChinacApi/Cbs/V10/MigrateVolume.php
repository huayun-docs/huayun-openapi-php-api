<?php
/**
 * 云硬盘变更类型
 * @author Tu
 */
namespace ChinacApi\Cbs\V10;

use ChinacApi\Core\RpcRequest;

class MigrateVolume extends RpcRequest
{
	function  __construct()
	{
		parent::__construct('Cbs', '1.0', 'MigrateVolume');
	}

	/**
	 * 云硬盘Id *(星号为必须，下同)
	 * @var string
	 */
	private $id;

	/**
	 * 新的卷类型 *
	 * @var string
	 */
	private $type;

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
}
