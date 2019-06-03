<?php
/**
 * 获取云主机vnc地址
 * @author Tu
 */
namespace ChinacApi\Ecs\V10;

use ChinacApi\Core\RpcRequest;

class DescribeInstanceVncUrl extends RpcRequest
{
    function  __construct()
    {
        parent::__construct('Ecs', '1.0', 'DescribeInstanceVncUrl');
    }

    /**
     * 主机Id
     * @var string
     */
    private $id;

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
