<?php
/**
 * 路由器解绑公网IP
 * @author Tu
 */
namespace ChinacApi\Vpc\V10;

use ChinacApi\Core\RpcRequest;

class RemoveRouterEip extends RpcRequest
{
	function  __construct()
	{
		parent::__construct('Vpc', '1.0', 'RemoveRouterEip');
	}

	/**
	 * 路由器Id *(星号为必填，下同)
	 * @var string
	 */
	private $routerId;

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
}
