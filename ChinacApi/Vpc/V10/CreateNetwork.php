<?php
/**
 * 创建私有网络
 * @author Tu
 */
namespace ChinacApi\Vpc\V10;

use ChinacApi\Core\RpcRequest;

class CreateNetwork extends RpcRequest
{
	function  __construct()
	{
		parent::__construct('Vpc', '1.0', 'CreateNetwork');
	}

	/**
	 * IP地址范围 *(星号为必填，下同)
	 * 格式：192.168.10.0/24
	 * @var string
	 */
	private $cidr;

	/**
	 * 私网名称
	 * @var string
	 */
	private $name;

	/**
	 * 私网描述
	 * @var string
	 */
	private $description;

	/**
	 * 起始IP地址
	 * @var string
	 */
	private $ipStart;

	/**
	 * 终止IP地址
	 * @var string
	 */
	private $ipEnd;

	/**
	 * 是否启用DHCP，默认为true
	 * @var boolean
	 */
	private $dhcp;

	/**
	 * 网关地址，主要影响到DHCP服务的路由信息
	 * @var string
	 */
	private $gateway;

	public function getCidr()
	{
		return $this->cidr;
	}

	public function setCidr($cidr)
	{
		$this->cidr = $cidr;
		$this->queryParameters['Cidr'] = $cidr;
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

	public function getDescription()
	{
		return $this->description;
	}

	public function setDescription($description)
	{
		$this->description = $description;
		$this->queryParameters['Description'] = $description;
		return $this;
	}

	public function getIpStart()
	{
		return $this->ipStart;
	}

	public function setIpStart($ipStart)
	{
		$this->ipStart = $ipStart;
		$this->queryParameters['IpStart'] = $ipStart;
		return $this;
	}

	public function getIpEnd()
	{
		return $this->ipEnd;
	}

	public function setIpEnd($ipEnd)
	{
		$this->ipEnd = $ipEnd;
		$this->queryParameters['IpEnd'] = $ipEnd;
		return $this;
	}

	public function getDhcp()
	{
		return $this->dhcp;
	}

	public function setDhcp($dhcp)
	{
		$this->dhcp = $dhcp;
		$this->queryParameters['Dhcp'] = $dhcp;
		return $this;
	}

	public function getGateway()
	{
		return $this->gateway;
	}

	public function setGateway($gateway)
	{
		$this->gateway = $gateway;
		$this->queryParameters['Gateway'] = $gateway;
		return $this;
	}
}
