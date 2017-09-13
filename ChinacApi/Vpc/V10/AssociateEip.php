<?php
/**
 * 绑定公网IP，目前仅是绑定云主机公网IP
 * @author Tu
 */
namespace ChinacApi\Vpc\V10;

use ChinacApi\Core\RpcRequest;

class AssociateEip extends RpcRequest
{
	function  __construct()
	{
		parent::__construct('Vpc', '1.0', 'AssociateEip');
	}

	/**
	 * 公网IP *(星号为必填，下同)
	 * @var string
	 */
	private $eip;

	/**
	 * 私有网络IP *(星号为必填，下同)
	 * @var string
	 */
	private $localIpAddress;

	/**
	 * 私有网络Id
	 * @var string
	 */
	private $localNetworkId;

	/**
	 * 路由器Id
	 * @var string
	 */
	private $routerId;

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

	public function getLocalIpAddress()
	{
		return $this->localIpAddress;
	}

	public function setLocalIpAddress($localIpAddress)
	{
		$this->localIpAddress = $localIpAddress;
		$this->queryParameters['LocalIpAddress'] = $localIpAddress;
		return $this;
	}

	public function getLocalNetworkId()
	{
		return $this->localNetworkId;
	}

	public function setLocalNetworkId($localNetworkId)
	{
		$this->localNetworkId = $localNetworkId;
		$this->queryParameters['LocalNetworkId'] = $localNetworkId;
		return $this;
	}

	public function getRouterId()
	{
		return $this->routerId;
	}

	public function setRouterId($routerId)
	{
		$this->routerId = $routerId;
		$this->queryParameters['routerId'] = $routerId;
		return $this;
	}
}
