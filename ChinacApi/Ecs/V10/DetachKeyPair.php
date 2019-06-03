<?php
/**
 * 将秘钥移除云主机
 * @author Tu
 */
namespace ChinacApi\Ecs\V10;

use ChinacApi\Core\RpcRequest;

class DetachKeyPair extends RpcRequest
{
    function  __construct()
    {
        parent::__construct('Ecs', '1.0', 'DetachKeyPair');
    }

    /**
     * 密钥Id
     * @var string
     */
    private $keyPairId;

    /**
     * 云主机id
     * @var string
     */
    private $instanceId;

    public function getKeyPairId()
    {
        return $this->keyPairId;
    }

    public function setKeyPairId($keyPairId)
    {
        $this->keyPairId = $keyPairId;
        $this->queryParameters['KeyPairId'] = $keyPairId;
        return $this;
    }

    public function getInstanceId()
    {
        return $this->instanceId;
    }

    public function setInstanceId($instanceId)
    {
        $this->instanceId = $instanceId;
        $this->queryParameters['InstanceId'] = $instanceId;
        return $this;
    }
}
