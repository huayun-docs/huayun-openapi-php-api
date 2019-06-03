<?php
/**
 * 云硬盘续费
 * @author Tu
 */
namespace ChinacApi\Cbs\V10;

use ChinacApi\Core\RpcRequest;

class RenewVolume extends RpcRequest
{
    function  __construct()
    {
        parent::__construct('Cbs', '1.0', 'RenewVolume');
    }

    /**
     * 云硬盘Id *(星号为必须，下同)
     * @var string
     */
    private $id;

    /**
     * 年限大小，续费月数 *
     * @var integer
     */
    private $period;

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
