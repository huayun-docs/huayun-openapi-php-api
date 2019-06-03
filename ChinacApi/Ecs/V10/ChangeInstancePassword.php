<?php
/**
 * 修改云主机密码
 * @author Tu
 */
namespace ChinacApi\Ecs\V10;

use ChinacApi\Core\RpcRequest;

class ChangeInstancePassword extends RpcRequest
{
    function  __construct()
    {
        parent::__construct('Ecs', '1.0', 'ChangeInstancePassword');
    }

    /**
     * 主机Id
     * @var string
     */
    private $id;

    /**
     * 主机密码
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
