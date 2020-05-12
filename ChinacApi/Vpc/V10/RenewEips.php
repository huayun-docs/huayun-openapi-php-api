<?php
/**
 * 公网IP续费
 * @author Tu
 */
namespace ChinacApi\Vpc\V10;

use ChinacApi\Core\RpcRequest;

class RenewEips extends RpcRequest
{
    function  __construct()
    {
        parent::__construct('Vpc', '1.0', 'RenewEips');
    }

    /**
     * 公网IP *(星号为必填，下同)
     * @var string
     */
    private $eip = [];

    /**
     * 续费月数 *
     * @var string
     */
    private $period;

    public function getEip()
    {
        return $this->eip;
    }

    public function setEip($eip)
    {
        if (is_string($eip)) {
            $eip = explode(',', trim(trim($eip), ','));
        }
        $i = 0;
        foreach ($eip as $v) {
            $this->queryParameters['Eip.' . $i] = (string)$v;
            ++ $i;
            $this->eip[] = (string)$v;
        }
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
