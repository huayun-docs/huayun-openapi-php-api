<?php
/**
 * 变更云主机私网
 * @author Tu
 */
namespace ChinacApi\Ecs\V10;

use ChinacApi\Core\RpcRequest;

class ChangeInstanceInterface extends RpcRequest
{
	function  __construct()
	{
		parent::__construct('Ecs', '1.0', 'ChangeInstanceInterface');
	}

	/**
	 * 主机Id
	 * @var string
	 */
	private $instanceId;

	/**
	 * 旧私网Id
	 * @var string
	 */
	private $oldNetworkId;

	/**
	 * 新私网Id
	 * @var string
	 */
	private $newNetworkId;

	/**
	 * 新私网IP
	 * @var string
	 */
	private $networkIpAddress;

	public function getInstanceId()
	{
		return $this->instanceId;
	}

	public function setInstanceId($instanceId)
	{
		$this->instanceId = $instanceId;
		$this->queryParameters['InstanceId'] = $instanceId;
		return $this;
	}

	public function getOldNetworkId()
	{
		return $this->oldNetworkId;
	}

	public function setOldNetworkId($oldNetworkId)
	{
		$this->oldNetworkId = $oldNetworkId;
		$this->queryParameters['OldNetworkId'] = $oldNetworkId;
		return $this;
	}

	public function getNewNetworkId()
	{
		return $this->newNetworkId;
	}

	public function setNewNetworkId($newNetworkId)
	{
		$this->newNetworkId = $newNetworkId;
		$this->queryParameters['NewNetworkId'] = $newNetworkId;
		return $this;
	}

	public function getNetworkIpAddress()
	{
		return $this->networkIpAddress;
	}

	public function setNetworkIpAddress($networkIpAddress)
	{
		$this->networkIpAddress = $networkIpAddress;
		$this->queryParameters['NetworkIpAddress'] = $networkIpAddress;
		return $this;
	}
}
