<?php
/**
 * 修改负载均衡器实例后端服务
 * @author Tu
 */
namespace ChinacApi\Clb\V10;

use ChinacApi\Core\RpcRequest;

class ModifyLBBackendAttributes extends RpcRequest
{
    /**
     * 后端服务Id *(星号为必须，下同)
     * @var string
     */
    private $id;

    /**
     * 名称
     * @var string
     */
    private $name;

    /**
     * 是否启用，默认为 true
     * @var string
     */
    private $enabled;

    /**
     * 权重
     * @var integer
     */
    private $weight;

    /**
     * 端口
     * @var string
     */
    private $port;

    function  __construct()
    {
        parent::__construct('Clb', '1.0', 'ModifyLBBackendAttributes');
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

    public function getPort()
    {
        return $this->port;
    }

    public function setPort($port)
    {
        $this->port = $port;
        $this->queryParameters['Port'] = $port;
        return $this;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
        $this->queryParameters['Weight'] = $weight;
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

    public function getEnabled()
    {
        return $this->enabled;
    }

    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
        $this->queryParameters['Enabled'] = $enabled;
        return $this;
    }
}
