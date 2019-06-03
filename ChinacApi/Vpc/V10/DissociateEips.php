<?php
/**
 * 解除公网IP，目前仅是解绑云主机公网IP
 * @author Tu
 */
namespace ChinacApi\Vpc\V10;

use ChinacApi\Core\RpcRequest;

class DissociateEips extends RpcRequest
{
    function  __construct()
    {
        parent::__construct('Vpc', '1.0', 'DissociateEips');
    }

    /**
     * 公网IP *(星号为必填，下同)
     * @var string
     */
    private $eip0;

    public function getEip0()
    {
        return $this->eip0;
    }

    public function setEip0($eip0)
    {
        $this->eip0 = $eip0;
        $this->queryParameters['Eip.0'] = $eip0;
        return $this;
    }
}
