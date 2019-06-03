<?php
/**
 * 重装操作系统
 * @author Tu
 */
namespace ChinacApi\Ecs\V10;

use ChinacApi\Core\RpcRequest;

class RebuildInstance extends RpcRequest
{
    function  __construct()
    {
        parent::__construct('Ecs', '1.0', 'RebuildInstance');
    }

    /**
     * 主机Id
     * @var string
     */
    private $id;

    /**
     * 重装的镜像Id
     * @var string
     */
    private $imageId;

    /**
     * 重装设置的密码
     * @var string
     */
    private $password;

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

    public function getImageId()
    {
        return $this->imageId;
    }

    public function setImageId($imageId)
    {
        $this->imageId = $imageId;
        $this->queryParameters['ImageId'] = $imageId;
        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
        $this->queryParameters['Password'] = $password;
        return $this;
    }
}
