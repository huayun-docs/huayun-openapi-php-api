<?php
/**
 * 删除负载均衡器实例后端服务
 * @author Tu
 */
namespace ChinacApi\Clb\V10;

use ChinacApi\Core\RpcRequest;

class DeleteLBBackend extends RpcRequest
{
    /**
     * 后端服务Id *(星号为必须，下同)
     * @var string
     */
    private $id;

    function  __construct()
    {
        parent::__construct('Clb', '1.0', 'DeleteLBBackend');
    }

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
