<?php
/**
 * 查询云主机密钥
 * @author Tu
 */
namespace ChinacApi\Ecs\V10;

use ChinacApi\Core\RpcRequest;

class DescribeKeyPairs extends RpcRequest
{
    function  __construct()
    {
        parent::__construct('Ecs', '1.0', 'DescribeKeyPairs');
    }

    /**
     * 云主机密钥Id
     * @var string
     */
    private $id0;

    /**
     * 云主机密钥名称
     * @var string
     */
    private $name0;

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

    public function geName0()
    {
        return $this->name0;
    }

    public function setName0($name0)
    {
        $this->name0 = $name0;
        $this->queryParameters['Name.0'] = $name0;
        return $this;
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
}
