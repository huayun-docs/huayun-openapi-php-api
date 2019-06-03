<?php
/**
 * 修改云主机快照名称、描述
 * @author Tu
 */
namespace ChinacApi\Ecs\V10;

use ChinacApi\Core\RpcRequest;

class ModifyInstanceSnapshotAttributes extends RpcRequest
{
    function  __construct()
    {
        parent::__construct('Ecs', '1.0', 'ModifyInstanceSnapshotAttributes');
    }

    /**
     * 快照Id
     * @var string
     */
    private $id;

    /**
     * 快照名称
     * @var string
     */
    private $name;

    /**
     * 快照描述
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
