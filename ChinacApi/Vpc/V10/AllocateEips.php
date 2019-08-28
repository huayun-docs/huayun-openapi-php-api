<?php
/**
 * 购买公网IP
 * @author Tu
 */
namespace ChinacApi\Vpc\V10;

use ChinacApi\Core\RpcRequest;

class AllocateEips extends RpcRequest
{
    function  __construct()
    {
        parent::__construct('Vpc', '1.0', 'AllocateEips');
    }

    /**
     * IP的带宽 *(星号为必填，下同)
     * @var string
     */
    private $bandwidth;

    /**
     * 付费类型 *
     * 包年包月PREPAID 试用PROBATION
     * @var string
     */
    private $payType;

    /**
     * 年限大小，包年月是几个月，试用是天 *
     * @var integer
     */
    private $period;

    /**
     * IP名称
     * @var string
     */
    private $name;

    /**
     * 网络类型
     * 取值：ChinaTelecom(中国电信), BGP，ChinaUnicom（中国联通），ChinaMobile（中国移动），Oversea（海外）
     * @var string
     */
    private $eipType;

    /**
     * 宽带计费类型，购买按流量宽带时需要这个值
     * @var string
     */
    private $bandwidthPayType;

    /**
     * 开通数量
     * @var integer
     */
    private $count;

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

    public function getBandwidthPayType()
    {
        return $this->bandwidthPayType;
    }

    public function setBandwidthPayType($bandwidthPayType)
    {
        $this->bandwidthPayType = $bandwidthPayType;
        $this->queryParameters['BandwidthPayType'] = $bandwidthPayType;
        return $this;
    }

    public function getCount()
    {
        return $this->count;
    }

    public function setCount($count)
    {
        $this->count = $count;
        $this->queryParameters['Count'] = $count;
        return $this;
    }
}
