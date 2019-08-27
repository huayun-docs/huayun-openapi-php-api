<?php
/**
 * 请求创建负载均衡器
 * @author Tu
 */
namespace ChinacApi\Clb\V10;

use ChinacApi\Core\RpcRequest;

class CreateLoadBalancer extends RpcRequest
{
    /**
     * 均衡器型号 *(星号为必填，下同)
     * @var string
     */
    private $loadBalancerType;

    /**
     * 付费类型 *
     * 按量付费ONDEMAND 包年包月PREPAID 试用PROBATION
     * @var string
     */
    private $payType;

    /**
     * 年限大小，按量不传，包年月是几个月，试用是天 *
     * @var integer
     */
    private $period;

    /**
     * 私网Id *
     * @var string
     */
    private $interface0NetworkId;

    /**
     * 公网宽带大小
     * @var integer
     */
    private $bandwidth;

    /**
     * IP网络类型
     * 电信ChinaTelecom 联调ChinaUnicom 移动ChinaMobile BGP 海外Oversea
     * @var string
     */
    private $eipType;

    /**
     * 防火墙Id
     * @var string
     */
    private $firewallId;

    /**
     * 均衡器描述
     * @var string
     */
    private $description;

    /**
     * 均衡器名称
     * @var string
     */
    private $name;

    function  __construct()
    {
        parent::__construct('Clb', '1.0', 'CreateLoadBalancer');
    }

    public function getLoadBalancerType()
    {
        return $this->loadBalancerType;
    }

    public function setLoadBalancerType($loadBalancerType)
    {
        $this->loadBalancerType = $loadBalancerType;
        $this->queryParameters['LoadBalancerType'] = $loadBalancerType;
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

    public function getEipType()
    {
        return $this->eipType;
    }

    public function setEipType($eipType)
    {
        $this->eipType = $eipType;
        $this->queryParameters['EipType'] = $eipType;
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
}
