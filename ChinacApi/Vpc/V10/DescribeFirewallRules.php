<?php
/**
 * 查询防火墙规则
 * @author Tu
 */
namespace ChinacApi\Vpc\V10;

use ChinacApi\Core\RpcRequest;

class DescribeFirewallRules extends RpcRequest
{
    function  __construct()
    {
        parent::__construct('Vpc', '1.0', 'DescribeFirewallRules');
    }

    /**
     * 记录偏移量(页数)
     * @var string
     */
    private $offset;

    /**
     * 记录数量，不指定返回全部
     * @var string
     */
    private $count;

    /**
     * 防火墙规则Id
     * @var string
     */
    private $firewallRule;

    /**
     * 防火墙Id
     * @var string
     */
    private $firewall0;

    public function getOffset()
    {
        return $this->offset;
    }

    public function setOffset($offset)
    {
        $this->offset = $offset;
        $this->queryParameters['Offset'] = $offset;
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

    public function getFirewallRule()
    {
        return $this->firewallRule;
    }

    public function setFirewallRule($firewallRule)
    {
        $this->firewallRule = $firewallRule;
        $this->queryParameters['FirewallRule'] = $firewallRule;
        return $this;
    }

    public function getFirewall0()
    {
        return $this->firewall0;
    }

    public function setFirewall0($firewall0)
    {
        $this->firewall0 = $firewall0;
        $this->queryParameters['Firewall.0'] = $firewall0;
        return $this;
    }
}
