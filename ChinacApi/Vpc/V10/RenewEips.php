<?php
/**
 * 公网IP续费
 * @author Tu
 */
namespace ChinacApi\Vpc\V10;

use ChinacApi\Core\RpcRequest;

class RenewEips extends RpcRequest
{
	function  __construct()
	{
		parent::__construct('Vpc', '1.0', 'RenewEips');
	}

	/**
	 * 公网IP *(星号为必填，下同)
	 * @var string
	 */
	private $eip0;

	/**
	 * 续费月数 *
	 * @var string
	 */
	private $period;

	public function getEip0()
	{
		return $this->eip0;
	}

	public function setEip0($eip0)
	{
		$this->eip0 = $eip0;
		$this->queryParameters['Eip.0'] = $eip0;
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
