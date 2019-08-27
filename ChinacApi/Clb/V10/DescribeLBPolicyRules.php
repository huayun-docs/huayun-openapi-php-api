<?php
/**
 * 查询负载均衡器实例转发策略规则
 * @author Tu
 */
namespace ChinacApi\Clb\V10;

use ChinacApi\Core\RpcRequest;

class DescribeLBPolicyRules extends RpcRequest
{
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
     * 策略Id
     * @var string
     */
    private $id0;

    /**
     * 策略Id
     * @var string
     */
    private $policyId0;

    /**
     * 是否启用
     * @var string
     */
    private $enabled;

    function  __construct()
    {
        parent::__construct('Clb', '1.0', 'DescribeLBPolicyRules');
    }

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

    public function getId0()
    {
        return $this->id0;
    }

    public function setId0($id0)
    {
        $this->id0 = $id0;
        $this->queryParameters['Id.0'] = $id0;
        return $this;
    }

    public function getPolicyId0()
    {
        return $this->policyId0;
    }

    public function setPolicyId0($policyId0)
    {
        $this->policyId0 = $policyId0;
        $this->queryParameters['PolicyId.0'] = $policyId0;
        return $this;
    }

    public function getEnabled()
    {
        return $this->enabled;
    }

    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
        $this->queryParameters['Enabled'] = $enabled;
        return $this;
    }
}
