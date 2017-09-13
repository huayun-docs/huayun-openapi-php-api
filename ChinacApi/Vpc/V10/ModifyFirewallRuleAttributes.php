<?php
/**
 * 修改防火墙规则
 * @author Tu
 */
namespace ChinacApi\Vpc\V10;

use ChinacApi\Core\RpcRequest;

class ModifyFirewallRuleAttributes extends RpcRequest
{
	function  __construct()
	{
		parent::__construct('Vpc', '1.0', 'ModifyFirewallRuleAttributes');
	}

	/**
	 * 规则Id *(星号必须，下同)
	 * @var string
	 */
	private $id;

	/**
	 * 规则名称
	 * @var string
	 */
	private $name;

	/**
	 * 方向：ingress(下行)，egress（上行） *
	 * @var string
	 */
	private $direction;

	/**
	 * 起始端口
	 * @var integer
	 */
	private $portStart;

	/**
	 * 结束端口
	 * @var integer
	 */
	private $portEnd;

	/**
	 * 协议：TCP,UDP,ICMP,GRE,ESP,AH,IPIP,ALL（所有协议） *
	 * @var string
	 */
	private $protocol;

	/**
	 * 优先级，默认为1
	 * @var integer
	 */
	private $priority;

	/**
	 * 允许的IP地址范围 *
	 * @var string
	 */
	private $remoteIpPrefix;

	/**
	 * 是否启用
	 * @var boolean
	 */
	private $enabled;

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

	public function getName()
	{
		return $this->name;
	}

	public function setName($name)
	{
		$this->name = $name;
		$this->queryParameters['Name'] = $name;
		return $this;
	}

	public function getDirection()
	{
		return $this->direction;
	}

	public function setDirection($direction)
	{
		$this->direction = $direction;
		$this->queryParameters['Direction'] = $direction;
		return $this;
	}

	public function getPortStart()
	{
		return $this->portStart;
	}

	public function setPortStart($portStart)
	{
		$this->portStart = $portStart;
		$this->queryParameters['PortStart'] = $portStart;
		return $this;
	}

	public function getPortEnd()
	{
		return $this->portEnd;
	}

	public function setPortEnd($portEnd)
	{
		$this->portEnd = $portEnd;
		$this->queryParameters['PortEnd'] = $portEnd;
		return $this;
	}

	public function getProtocol()
	{
		return $this->protocol;
	}

	public function setProtocol($protocol)
	{
		$this->protocol = $protocol;
		$this->queryParameters['Protocol'] = $protocol;
		return $this;
	}

	public function getPriority()
	{
		return $this->priority;
	}

	public function setPriority($priority)
	{
		$this->priority = $priority;
		$this->queryParameters['Priority'] = $priority;
		return $this;
	}

	public function getRemoteIpPrefix()
	{
		return $this->remoteIpPrefix;
	}

	public function setRemoteIpPrefix($remoteIpPrefix)
	{
		$this->remoteIpPrefix = $remoteIpPrefix;
		$this->queryParameters['RemoteIpPrefix'] = $remoteIpPrefix;
		return $this;
	}

	public function getEnabled()
	{
		return $this->enabled;
	}

	public function setEnabled($enabled)
	{
		$this->enabled = $enabled;
		$this->queryParameters['Enabled'] = $enabled;
		return $this;
	}
}
