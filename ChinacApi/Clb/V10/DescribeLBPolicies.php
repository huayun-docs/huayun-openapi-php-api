<?php
/**
 * 查询负载均衡器实例转发策略
 * @author Tu
 */
namespace ChinacApi\Clb\V10;

use ChinacApi\Core\RpcRequest;

class DescribeLBPolicies extends RpcRequest
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
     * 均衡器Id
     * @var string
     */
    private $lBId;

    /**
     * 优先级
     * @var integer
     */
    private $priority;

    /**
     * 是否启用
     * @var string
     */
    private $enabled;

    /**
     * 策略名称
     * @var string
     */
    private $name;

    /**
     * 监听器ID
     * @var string
     */
    private $lBListenerId0;

    /**
     * 策略ID
     * @var string
     */
    private $id0;

    function  __construct()
    {
        parent::__construct('Clb', '1.0', 'DescribeLBPolicies');
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

    public function getLBId()
    {
        return $this->lBId;
    }

    public function setLBId($lBId)
    {
        $this->lBId = $lBId;
        $this->queryParameters['LBId'] = $lBId;
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

    public function getLBListenerId0()
    {
        return $this->lBListenerId0;
    }

    public function setLBListenerId0($lBListenerId0)
    {
        $this->lBListenerId0 = $lBListenerId0;
        $this->queryParameters['LBListenerId.0'] = $lBListenerId0;
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
}
