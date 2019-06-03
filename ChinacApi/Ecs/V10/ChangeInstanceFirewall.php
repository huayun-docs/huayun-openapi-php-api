<?php
/**
 * 修改云主机防火墙
 * @author Tu
 */
namespace ChinacApi\Ecs\V10;

use ChinacApi\Core\RpcRequest;

class ChangeInstanceFirewall extends RpcRequest
{
    function  __construct()
    {
        parent::__construct('Ecs', '1.0', 'ChangeInstanceFirewall');
    }

    /**
     * 主机Id
     * @var string
     */
    private $id;

    /**
     * 防火墙Id
     * @var string
     */
    private $firewallId;

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
