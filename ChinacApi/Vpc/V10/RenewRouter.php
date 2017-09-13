<?php
/**
 * 路由器续费
 * @author Tu
 */
namespace ChinacApi\Vpc\V10;

use ChinacApi\Core\RpcRequest;

class RenewRouter extends RpcRequest
{
	function  __construct()
	{
		parent::__construct('Vpc', '1.0', 'RenewRouter');
	}

	/**
	 * 路由器Id *(星号为必填，下同)
	 * @var string
	 */
	private $id;

	/**
	 * 续费月数 *
	 * @var integer
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
