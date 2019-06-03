<?php
/**
 * 云主机快照还原
 * @author Tu
 */
namespace ChinacApi\Ecs\V10;

use ChinacApi\Core\RpcRequest;

class ApplyInstanceSnapshot extends RpcRequest
{
    function  __construct()
    {
        parent::__construct('Ecs', '1.0', 'ApplyInstanceSnapshot');
    }

    /**
     * 主机快照Id
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
