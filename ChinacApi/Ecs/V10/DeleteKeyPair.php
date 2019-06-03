<?php
/**
 * 删除密钥
 * @author Tu
 */
namespace ChinacApi\Ecs\V10;

use ChinacApi\Core\RpcRequest;

class DeleteKeyPair extends RpcRequest
{
    function  __construct()
    {
        parent::__construct('Ecs', '1.0', 'DeleteKeyPair');
    }

    /**
     * 密钥Id
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
