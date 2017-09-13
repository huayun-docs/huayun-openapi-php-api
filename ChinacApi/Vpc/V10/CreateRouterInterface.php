<?php
/**
 * 路由器加入私有网络
 * @author Tu
 */
namespace ChinacApi\Vpc\V10;

use ChinacApi\Core\RpcRequest;

class CreateRouterInterface extends RpcRequest
{
	function  __construct()
	{
		parent::__construct('Vpc', '1.0', 'CreateRouterInterface');
	}

	/**
	 * 路由器Id *(星号为必填，下同)
	 * @var string
	 */
	private $routerId;

	/**
	 * 私有网络Id *
	 * @var string
	 */
	private $networkId;

	public function getRouterId()
	{
		return $this->routerId;
	}

	public function setRouterId($routerId)
	{
		$this->routerId = $routerId;
		$this->queryParameters['RouterId'] = $routerId;
		return $this;
	}

	public function getNetworkId()
	{
		return $this->networkId;
	}

	public function setNetworkId($networkId)
	{
		$this->networkId = $networkId;
		$this->queryParameters['NetworkId'] = $networkId;
		return $this;
	}
}
