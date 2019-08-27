<?php
/**
 * 更新负载均衡器实例监听器名称
 * @author Tu
 */
namespace ChinacApi\Clb\V10;

use ChinacApi\Core\RpcRequest;

class ModifyLBListenerAttributes extends RpcRequest
{
    /**
     * 监听器Id *(星号为必须，下同)
     * @var string
     */
    private $id;

    /**
     * 监听器名称
     * @var string
     */
    private $name;

    function  __construct()
    {
        parent::__construct('Clb', '1.0', 'ModifyLBListenerAttributes');
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
}
