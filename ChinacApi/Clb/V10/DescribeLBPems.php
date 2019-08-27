<?php
/**
 * 查询负载均衡器实例证书
 * @author Tu
 */
namespace ChinacApi\Clb\V10;

use ChinacApi\Core\RpcRequest;

class DescribeLBPems extends RpcRequest
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
     * 证书Id
     * @var string
     */
    private $id0;

    /**
     * 相关的SSL证书ID
     * @var string
     */
    private $relatedId0;

    /**
     * 证书名称
     * @var string
     */
    private $name;

    /**
     * 创建开始时间
     * 格式yyyy-MM-dd HH:mm:ss
     * @var string
     */
    private $createStartTime;

    /**
     * 创建结束时间
     * 格式yyyy-MM-dd HH:mm:ss
     * @var string
     */
    private $createEndTime;

    function  __construct()
    {
        parent::__construct('Clb', '1.0', 'DescribeLBPems');
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

    public function getRelatedId0()
    {
        return $this->relatedId0;
    }

    public function setRelatedId0($relatedId0)
    {
        $this->relatedId0 = $relatedId0;
        $this->queryParameters['RelatedId.0'] = $relatedId0;
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

    public function getCreateStartTime()
    {
        return $this->createStartTime;
    }

    public function setCreateStartTime($createStartTime)
    {
        $this->createStartTime = $createStartTime;
        $this->queryParameters['CreateStartTime'] = $createStartTime;
        return $this;
    }

    public function getCreateEndTime()
    {
        return $this->createEndTime;
    }

    public function setCreateEndTime($createEndTime)
    {
        $this->createEndTime = $createEndTime;
        $this->queryParameters['CreateEndTime'] = $createEndTime;
        return $this;
    }
}
