<?php
/**
 * 修改路由器使用的防火墙
 * @author Tu
 */
namespace ChinacApi\Vpc\V10;

use ChinacApi\Core\RpcRequest;

class ModifyRouterFirewall extends RpcRequest
{
	function  __construct()
	{
		parent::__construct('Vpc', '1.0', 'ModifyRouterFirewall');
	}

	/**
	 * 路由器Id *(星号为必填，下同)
	 * @var string
	 */
	private $id;

	/**
	 * 防火墙ID，不指定则使用默认防火墙
	 * @var string
	 */
	private $firewallId;

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

	public function getFirewallId()
	{
		return $this->firewallId;
	}

	public function setFirewallId($firewallId)
	{
		$this->firewallId = $firewallId;
		$this->queryParameters['FirewallId'] = $firewallId;
		return $this;
	}
}
