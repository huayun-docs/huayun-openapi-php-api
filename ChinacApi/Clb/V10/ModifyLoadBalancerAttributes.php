<?php
/**
 * 修改负载均衡器实例信息
 * @author Tu
 */
namespace ChinacApi\Clb\V10;

use ChinacApi\Core\RpcRequest;

class ModifyLoadBalancerAttributes extends RpcRequest
{
    /**
     * 均衡器Id *(星号为必须，下同)
     * @var string
     */
    private $id;

    /**
     * 均衡器名称
     * @var string
     */
    private $name;

    /**
     * 均衡器描述
     * @var string
     */
    private $description;

    function  __construct()
    {
        parent::__construct('Clb', '1.0', 'ModifyLoadBalancerAttributes');
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
