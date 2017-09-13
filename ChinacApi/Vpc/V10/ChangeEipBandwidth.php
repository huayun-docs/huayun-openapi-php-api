<?php
/**
 * 公网IP变更宽带
 * @author Tu
 */
namespace ChinacApi\Vpc\V10;

use ChinacApi\Core\RpcRequest;

class ChangeEipBandwidth extends RpcRequest
{
	function  __construct()
	{
		parent::__construct('Vpc', '1.0', 'ChangeEipBandwidth');
	}

	/**
	 * 公网IP *(星号为必填，下同)
	 * @var string
	 */
	private $eip;

	/**
	 * 变更的IP带宽 *
	 * @var string
	 */
	private $bandwidth;

	public function getEip()
	{
		return $this->eip;
	}

	public function setEip($eip)
	{
		$this->eip = $eip;
		$this->queryParameters['Eip'] = $eip;
		return $this;
	}

	public function getBandwidth()
	{
		return $this->bandwidth;
	}

	public function setBandwidth($bandwidth)
	{
		$this->bandwidth = $bandwidth;
		$this->queryParameters['Bandwidth'] = $bandwidth;
		return $this;
	}
}
