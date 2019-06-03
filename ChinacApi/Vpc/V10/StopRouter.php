<?php
/**
 * 关闭路由器
 * @author Tu
 */
namespace ChinacApi\Vpc\V10;

use ChinacApi\Core\RpcRequest;

class StopRouter extends RpcRequest
{
    function  __construct()
    {
        parent::__construct('Vpc', '1.0', 'StopRouter');
    }

    /**
     * 路由器Id *(星号为必填，下同)
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
