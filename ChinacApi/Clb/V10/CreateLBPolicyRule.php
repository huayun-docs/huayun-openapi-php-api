<?php
/**
 * 创建负载均衡器实例转发策略规则
 * @author Tu
 */
namespace ChinacApi\Clb\V10;

use ChinacApi\Core\RpcRequest;

class CreateLBPolicyRule extends RpcRequest
{
    /**
     * 策略Id *(星号为必须，下同)
     * @var string
     */
    private $policyId;

    /**
     * 是否启用 *
     * @var string
     */
    private $enabled;

    /**
     * 操作 *
     * @var string
     */
    private $operator;

    /**
     * 类型：Method Path Cookie Header *
     * @var string
     */
    private $type;

    /**
     * 值 *
     * @var string
     */
    private $value;

    /**
     * 名称
     * @var string
     */
    private $name;

    /**
     * 是否对大小写敏感
     * @var string
     */
    private $caseSensitive;

    /**
     * 键
     * @var string
     */
    private $key;

    /**
     * 描述
     * @var string
     */
    private $description;

    function  __construct()
    {
        parent::__construct('Clb', '1.0', 'CreateLBPolicyRule');
    }

    public function getPolicyId()
    {
        return $this->policyId;
    }

    public function setPolicyId($policyId)
    {
        $this->policyId = $policyId;
        $this->queryParameters['PolicyId'] = $policyId;
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

    public function getOperator()
    {
        return $this->operator;
    }

    public function setOperator($operator)
    {
        $this->operator = $operator;
        $this->queryParameters['Operator'] = $operator;
        return $this;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
        $this->queryParameters['Type'] = $type;
        return $this;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($value)
    {
        $this->value = $value;
        $this->queryParameters['Value'] = $value;
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

    public function getCaseSensitive()
    {
        return $this->caseSensitive;
    }

    public function setCaseSensitive($caseSensitive)
    {
        $this->caseSensitive = $caseSensitive;
        $this->queryParameters['CaseSensitive'] = $caseSensitive;
        return $this;
    }

    public function getKey()
    {
        return $this->key;
    }

    public function setKey($key)
    {
        $this->key = $key;
        $this->queryParameters['Key'] = $key;
        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
        $this->queryParameters['Description'] = $description;
        return $this;
    }
}
