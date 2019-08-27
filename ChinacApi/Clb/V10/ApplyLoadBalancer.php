<?php
/**
 * 应用将新的负载均衡器配置
 * @author Tu
 */
namespace ChinacApi\Clb\V10;

use ChinacApi\Core\RpcRequest;

class ApplyLoadBalancer extends RpcRequest
{
    /**
     * 均衡器Id *(星号为必须，下同)
     * @var string
     */
    private $id;

    function  __construct()
    {
        parent::__construct('Clb', '1.0', 'ApplyLoadBalancer');
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
}
