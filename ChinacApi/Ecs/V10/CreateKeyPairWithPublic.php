<?php
/**
 * 根据自有秘钥对创建一个秘钥
 * @author Tu
 */
namespace ChinacApi\Ecs\V10;

use ChinacApi\Core\RpcRequest;

class CreateKeyPairWithPublic extends RpcRequest
{
    function  __construct()
    {
        parent::__construct('Ecs', '1.0', 'CreateKeyPairWithPublic');
    }

    /**
     * 密钥名称
     * @var string
     */
    private $name;

    /**
     * 公钥Id
     * @var string
     */
    private $publicKey;

    /**
     * 密钥描述
     * @var string
     */
    private $description;

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

    public function getPublicKey()
    {
        return $this->publicKey;
    }

    public function setPublicKey($publicKey)
    {
        $this->publicKey = $publicKey;
        $this->queryParameters['PublicKey'] = $publicKey;
        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
        $this->queryParameters['Description'] = $description;
        return $this;
    }
}
