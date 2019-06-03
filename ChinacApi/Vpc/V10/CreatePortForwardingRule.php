<?php
/**
 * 路由器添加端口转发规则，前提是路由器要绑定公网IP和连接私网
 * @author Tu
 */
namespace ChinacApi\Vpc\V10;

use ChinacApi\Core\RpcRequest;

class CreatePortForwardingRule extends RpcRequest
{
    function  __construct()
    {
        parent::__construct('Vpc', '1.0', 'CreatePortForwardingRule');
    }

    /**
     * 路由器Id *(星号为必填，下同)
     * @var string
     */
    private $routerId;

    /**
     * 协议TCP、UDP *
     * @var string
     */
    private $protocol;

    /**
     * 外部起始端口 *
     * @var integer
     */
    private $externalStartPort;

    /**
     * 外部结束端口 *
     * @var integer
     */
    private $externalEndPort;

    /**
     * 内部起始端口 *
     * @var integer
     */
    private $internalStartPort;

    /**
     * 内部结束端口 *
     * @var integer
     */
    private $internalEndPort;

    /**
     * 目标 IP 地址 *
     * @var string
     */
    private $localIpAddress;

    /**
     * 是否启用 *
     * @var boolean
     */
    private $enabled;

    /**
     * 规则名称
     * @var string
     */
    private $name;

    public function getRouterId()
    {
        return $this->routerId;
    }

    public function setRouterId($routerId)
    {
        $this->routerId = $routerId;
        $this->queryParameters['RouterId'] = $routerId;
        return $this;
    }

    public function getProtocol()
    {
        return $this->protocol;
    }

    public function setProtocol($protocol)
    {
        $this->protocol = $protocol;
        $this->queryParameters['Protocol'] = $protocol;
        return $this;
    }

    public function getExternalStartPort()
    {
        return $this->externalStartPort;
    }

    public function setExternalStartPort($externalStartPort)
    {
        $this->externalStartPort = $externalStartPort;
        $this->queryParameters['ExternalStartPort'] = $externalStartPort;
        return $this;
    }

    public function getExternalEndPort()
    {
        return $this->externalEndPort;
    }

    public function setExternalEndPort($externalEndPort)
    {
        $this->externalEndPort = $externalEndPort;
        $this->queryParameters['ExternalEndPort'] = $externalEndPort;
        return $this;
    }

    public function getInternalStartPort()
    {
        return $this->internalStartPort;
    }

    public function setInternalStartPort($internalStartPort)
    {
        $this->internalStartPort = $internalStartPort;
        $this->queryParameters['InternalStartPort'] = $internalStartPort;
        return $this;
    }

    public function getInternalEndPort()
    {
        return $this->internalEndPort;
    }

    public function setInternalEndPort($internalEndPort)
    {
        $this->internalEndPort = $internalEndPort;
        $this->queryParameters['InternalEndPort'] = $internalEndPort;
        return $this;
    }

    public function getLocalIpAddress()
    {
        return $this->localIpAddress;
    }

    public function setLocalIpAddress($localIpAddress)
    {
        $this->localIpAddress = $localIpAddress;
        $this->queryParameters['LocalIpAddress'] = $localIpAddress;
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
