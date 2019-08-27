<?php
/**
 * 修改负载均衡器防火墙
 * @author Tu
 */
namespace ChinacApi\Clb\V10;

use ChinacApi\Core\RpcRequest;

class ModifyLoadBalancerFirewall extends RpcRequest
{
    /**
     * 均衡器Id *(星号为必须，下同)
     * @var string
     */
    private $id;

    /**
     * 防火墙Id
     * @var string
     */
    private $firewallId;

    function  __construct()
    {
        parent::__construct('Clb', '1.0', 'ModifyLoadBalancerFirewall');
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
}
