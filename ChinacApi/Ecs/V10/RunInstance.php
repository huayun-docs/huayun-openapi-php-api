<?php
/**
 * 请求云主机列表、详情
 * @author Tu
 */
namespace ChinacApi\Ecs\V10;

use ChinacApi\Core\RpcRequest;

class RunInstance extends RpcRequest
{
	function  __construct()
	{
		parent::__construct('Ecs', '1.0', 'RunInstance');
	}

	/**
	 * 主机名称
	 * @var string
	 */
	private $name;

	/**
	 * 镜像Id
	 * @var string
	 */
	private $imageId;

	/**
	 * 云主机型号 *(星号为必填，下同)
	 * @var string
	 */
	private $instanceType;

	/**
	 * 云主机密码
	 * @var string
	 */
	private $password;

	/**
	 * 密钥id
	 * @var string
	 */
	private $keyPair;

	/**
	 * 防火墙Id
	 * @var string
	 */
	private $firewallId;

	/**
	 * 私网Id
	 * @var string
	 */
	private $interface0NetworkId;

	/**
	 * 私网IP
	 * @var string
	 */
	private $interface0IpAddress;

	/**
	 * 公网宽带大小
	 * @var integer
	 */
	private $internetBandwidth;

	/**
	 * 路由器Id
	 * @var string
	 */
	private $internetRouterId;

	/**
	 * 系统盘卷类型
	 * @var string
	 */
	private $volumes0Type;

	/**
	 * 系统盘卷大小
	 * @var integer
	 */
	private $volumes0Size;

	/**
	 * 第一块磁盘卷类型
	 * @var string
	 */
	private $volumes1Type;

	/**
	 * 第一块磁盘卷大小
	 * @var integer
	 */
	private $volumes1Size;

	/**
	 * 第二块磁盘卷类型
	 * @var string
	 */
	private $volumes2Type;

	/**
	 * 第二块磁盘卷大小
	 * @var integer
	 */
	private $volumes2Size;

	/**
	 * 第三块磁盘卷类型
	 * @var string
	 */
	private $volumes3Type;

	/**
	 * 第三块磁盘卷大小
	 * @var integer
	 */
	private $volumes3Size;

	/**
	 * 第四块磁盘卷类型
	 * @var string
	 */
	private $volumes4Type;

	/**
	 * 第四块磁盘卷大小
	 * @var integer
	 */
	private $volumes4Size;

	/**
	 * 付费类型 *
	 * 按量付费ONDEMAND 包年包月PREPAID 试用PROBATION
	 * @var string
	 */
	private $payType;

	/**
	 * 年限大小，按量不传，包年月是几个月，试用是天
	 * @var integer
	 */
	private $period;

	/**
	 * 主机系列
	 * SERIES_STANDARD,SERIES_SUPERCOMPUTER,SERIES_SUPERNETWORK
	 * @var string
	 */
	private $instanceSeries;

	public function geName()
	{
		return $this->name;
	}

	public function setName($name)
	{
		$this->name = $name;
		$this->queryParameters['Name'] = $name;
		return $this;
	}

	public function getImageId()
	{
		return $this->imageId;
	}

	public function setImageId($imageId)
	{
		$this->imageId = $imageId;
		$this->queryParameters['ImageId'] = $imageId;
		return $this;
	}

	public function getInstanceType()
	{
		return $this->instanceType;
	}

	public function setInstanceType($instanceType)
	{
		$this->instanceType = $instanceType;
		$this->queryParameters['InstanceType'] = $instanceType;
		return $this;
	}

	public function getPassword()
	{
		return $this->password;
	}

	public function setPassword($password)
	{
		$this->password = $password;
		$this->queryParameters['Password'] = $password;
		return $this;
	}

	public function getKeyPair()
	{
		return $this->keyPair;
	}

	public function setKeyPair($keyPair)
	{
		$this->keyPair = $keyPair;
		$this->queryParameters['KeyPair'] = $keyPair;
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

	public function getInterface0NetworkId()
	{
		return $this->interface0NetworkId;
	}

	public function setInterface0NetworkId($interface0NetworkId)
	{
		$this->interface0NetworkId = $interface0NetworkId;
		$this->queryParameters['Interface.0.NetworkId'] = $interface0NetworkId;
		return $this;
	}

	public function getInterface0IpAddress()
	{
		return $this->interface0IpAddress;
	}

	public function setInterface0IpAddress($interface0IpAddress)
	{
		$this->interface0IpAddress = $interface0IpAddress;
		$this->queryParameters['Interface.0.IpAddress'] = $interface0IpAddress;
		return $this;
	}

	public function getInternetBandwidth()
	{
		return $this->internetBandwidth;
	}

	public function setInternetBandwidth($internetBandwidth)
	{
		$this->internetBandwidth = $internetBandwidth;
		$this->queryParameters['Internet.Bandwidth'] = $internetBandwidth;
		return $this;
	}

	public function getInternetRouterId()
	{
		return $this->internetRouterId;
	}

	public function setInternetRouterId($internetRouterId)
	{
		$this->internetRouterId = $internetRouterId;
		$this->queryParameters['Internet.RouterId'] = $internetRouterId;
		return $this;
	}

	public function getVolumes0Type()
	{
		return $this->volumes0Type;
	}

	public function setVolumes0Type($volumes0Type)
	{
		$this->volumes0Type = $volumes0Type;
		$this->queryParameters['Volumes.0.Type'] = $volumes0Type;
		return $this;
	}

	public function getVolumes0Size()
	{
		return $this->volumes0Size;
	}

	public function setVolumes0Size($volumes0Size)
	{
		$this->volumes0Size = $volumes0Size;
		$this->queryParameters['Volumes.0.Size'] = $volumes0Size;
		return $this;
	}

	public function getVolumes1Type()
	{
		return $this->volumes1Type;
	}

	public function setVolumes1Type($volumes1Type)
	{
		$this->volumes1Type = $volumes1Type;
		$this->queryParameters['Volumes.1.Type'] = $volumes1Type;
		return $this;
	}

	public function getVolumes1Size()
	{
		return $this->volumes1Size;
	}

	public function setVolumes1Size($volumes1Size)
	{
		$this->volumes1Size = $volumes1Size;
		$this->queryParameters['Volumes.1.Size'] = $volumes1Size;
		return $this;
	}

	public function getVolumes2Type()
	{
		return $this->volumes2Type;
	}

	public function setVolumes2Type($volumes2Type)
	{
		$this->volumes2Type = $volumes2Type;
		$this->queryParameters['Volumes.2.Type'] = $volumes2Type;
		return $this;
	}

	public function getVolumes2Size()
	{
		return $this->volumes2Size;
	}

	public function setVolumes2Size($volumes2Size)
	{
		$this->volumes2Size = $volumes2Size;
		$this->queryParameters['Volumes.2.Size'] = $volumes2Size;
		return $this;
	}

	public function getVolumes3Type()
	{
		return $this->volumes3Type;
	}

	public function setVolumes3Type($volumes3Type)
	{
		$this->volumes3Type = $volumes3Type;
		$this->queryParameters['Volumes.3.Type'] = $volumes3Type;
		return $this;
	}

	public function getVolumes3Size()
	{
		return $this->volumes3Size;
	}

	public function setVolumes3Size($volumes3Size)
	{
		$this->volumes3Size = $volumes3Size;
		$this->queryParameters['Volumes.3.Size'] = $volumes3Size;
		return $this;
	}

	public function getVolumes4Type()
	{
		return $this->volumes4Type;
	}

	public function setVolumes4Type($volumes4Type)
	{
		$this->volumes4Type = $volumes4Type;
		$this->queryParameters['Volumes.4.Type'] = $volumes4Type;
		return $this;
	}

	public function getVolumes4Size()
	{
		return $this->volumes4Size;
	}

	public function setVolumes4Size($volumes4Size)
	{
		$this->volumes4Size = $volumes4Size;
		$this->queryParameters['Volumes.4.Size'] = $volumes4Size;
		return $this;
	}

	public function getPayType()
	{
		return $this->payType;
	}

	public function setPayType($payType)
	{
		$this->payType = $payType;
		$this->queryParameters['PayType'] = $payType;
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

	public function getInstanceSeries()
	{
		return $this->instanceSeries;
	}

	public function setInstanceSeries($instanceSeries)
	{
		$this->instanceSeries = $instanceSeries;
		$this->queryParameters['InstanceSeries'] = $instanceSeries;
		return $this;
	}
}
