<?php
/**
 * 创建负载均衡器实例转发策略
 * @author Tu
 */
namespace ChinacApi\Clb\V10;

use ChinacApi\Core\RpcRequest;

class CreateLBPolicy extends RpcRequest
{
    /**
     * 监听器Id *(星号为必须，下同)
     * @var string
     */
    private $listenerId;

    /**
     * 是否启用 *
     * @var string
     */
    private $enabled;

    /**
     * 条件：ALL,ANY *
     * @var string
     */
    private $operator;

    /**
     * 策略名称 *
     * @var string
     */
    private $name;

    /**
     * 优先级，正整数或0，数字越小，优先级越高 *
     * @var integer
     */
    private $priority;

    /**
     * 策略描述
     * @var string
     */
    private $description;

    function  __construct()
    {
        parent::__construct('Clb', '1.0', 'CreateLBPolicy');
    }

    public function getListenerId()
    {
        return $this->listenerId;
    }

    public function setListenerId($listenerId)
    {
        $this->listenerId = $listenerId;
        $this->queryParameters['ListenerId'] = $listenerId;
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

    public function getPriority()
    {
        return $this->priority;
    }

    public function setPriority($priority)
    {
        $this->priority = $priority;
        $this->queryParameters['Priority'] = $priority;
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
