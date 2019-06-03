<?php
/**
 * 创建防火墙
 * @author Tu
 */
namespace ChinacApi\Vpc\V10;

use ChinacApi\Core\RpcRequest;

class CreateFirewall extends RpcRequest
{
    function  __construct()
    {
        parent::__construct('Vpc', '1.0', 'CreateFirewall');
    }

    /**
     * 防火墙名称 *(星号必须，下同)
     * @var string
     */
    private $name;

    /**
     * 防火墙描述
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
