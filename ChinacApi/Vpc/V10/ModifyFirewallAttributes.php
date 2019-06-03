<?php
/**
 * 修改防火墙名称和描述
 * @author Tu
 */
namespace ChinacApi\Vpc\V10;

use ChinacApi\Core\RpcRequest;

class ModifyFirewallAttributes extends RpcRequest
{
    function  __construct()
    {
        parent::__construct('Vpc', '1.0', 'ModifyFirewallAttributes');
    }

    /**
     * 防火墙Id *(星号为必填，下同)
     * @var string
     */
    private $id;

    /**
     * 防火墙名称 *|(符合一定条件必须)
     * 与描述有一个必须
     * @var string
     */
    private $name;

    /**
     * 防火墙描述 *|
     * @var string
     */
    private $description;

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
