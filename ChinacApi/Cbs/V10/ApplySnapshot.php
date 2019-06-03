<?php
/**
 * 根据快照还原云硬盘
 * @author Tu
 */
namespace ChinacApi\Cbs\V10;

use ChinacApi\Core\RpcRequest;

class ApplySnapshot extends RpcRequest
{
    function  __construct()
    {
        parent::__construct('Cbs', '1.0', 'ApplySnapshot');
    }

    /**
     * 快照Id *(星号为必须，下同)
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
