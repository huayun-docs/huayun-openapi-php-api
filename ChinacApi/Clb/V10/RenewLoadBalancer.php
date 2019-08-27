<?php
/**
 * 均衡器续费
 * @author Tu
 */
namespace ChinacApi\Clb\V10;

use ChinacApi\Core\RpcRequest;

class RenewLoadBalancer extends RpcRequest
{
    /**
     * 均衡器Id *(星号为必须，下同)
     * @var string
     */
    private $id;

    /**
     * 年限大小 *
     * @var integer
     */
    private $period;

    function  __construct()
    {
        parent::__construct('Clb', '1.0', 'RenewLoadBalancer');
    }

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
