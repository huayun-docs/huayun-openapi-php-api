<?php
/**
 * 云主机续费
 * @author Tu
 */
namespace ChinacApi\Ecs\V10;

use ChinacApi\Core\RpcRequest;

class RenewInstance extends RpcRequest
{
	function  __construct()
	{
		parent::__construct('Ecs', '1.0', 'RenewInstance');
	}

	/**
	 * 主机Id
	 * @var string
	 */
	private $id;

	/**
	 * 年限大小
	 * @var string
	 */
	private $period;

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
