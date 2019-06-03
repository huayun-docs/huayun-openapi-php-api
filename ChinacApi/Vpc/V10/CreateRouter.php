<?php
/**
 * 创建路由器
 * @author Tu
 */
namespace ChinacApi\Vpc\V10;

use ChinacApi\Core\RpcRequest;

class CreateRouter extends RpcRequest
{
    function  __construct()
    {
        parent::__construct('Vpc', '1.0', 'CreateRouter');
    }

    /**
     * 付费类型 *(星号为必填，下同)
     * 包年包月PREPAID 试用PROBATION
     * @var string
     */
    private $payType;

    /**
     * 路由器名称
     * @var string
     */
    private $name;

    /**
     * 路由器描述
     * @var string
     */
    private $description;

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
     * 年限大小，包年月是几个月，试用是天 *
     * @var integer
     */
    private $period;

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
}
