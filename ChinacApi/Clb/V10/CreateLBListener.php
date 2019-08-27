<?php
/**
 * 创建负载均衡器实例监听器
 * @author Tu
 */
namespace ChinacApi\Clb\V10;

use ChinacApi\Core\RpcRequest;

class CreateLBListener extends RpcRequest
{
    /**
     * 均衡器Id *(星号为必须，下同)
     * @var string
     */
    private $loadBalancerId;

    /**
     * 监听的端口 *
     * @var string
     */
    private $port;

    /**
     * 协议 HTTP HTTPS TCP *
     * @var string
     */
    private $protocol;

    /**
     * 负载均衡器方法，支持 ROUND_ROBIN，SOURCE_IP，LEAST_CONNECTIONS *
     * @var string
     */
    private $loadBalancingMethod;

    /**
     * 监听器名称
     * @var string
     */
    private $name;

    /**
     * 均衡器证书ID
     * @var string
     */
    private $pemId;

    /**
     * 会话保持
     * @var string
     */
    private $sessionPersistence;

    /**
     * 最大连接数，默认是负载均衡器的连接数
     * @var integer
     */
    private $maxConnections;

    /**
     * 是否启用，是否启用，默认是启用
     * @var string
     */
    private $enabled;

    /**
     * 健康检查方法，见文档说明
     * @var string
     */
    private $healthCheckMethod;

    /**
     * 健康检查选项，见文档说明
     * @var string
     */
    private $healthCheckOption;

    /**
     * 是否启用健康检查，默认true
     * @var string
     */
    private $healthCheckEnabled;

    function  __construct()
    {
        parent::__construct('Clb', '1.0', 'CreateLBListener');
    }

    public function getLoadBalancerId()
    {
        return $this->loadBalancerId;
    }

    public function setLoadBalancerId($loadBalancerId)
    {
        $this->loadBalancerId = $loadBalancerId;
        $this->queryParameters['LoadBalancerId'] = $loadBalancerId;
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

    public function getLoadBalancingMethod()
    {
        return $this->loadBalancingMethod;
    }

    public function setLoadBalancingMethod($loadBalancingMethod)
    {
        $this->loadBalancingMethod = $loadBalancingMethod;
        $this->queryParameters['LoadBalancingMethod'] = $loadBalancingMethod;
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

    public function getPemId()
    {
        return $this->pemId;
    }

    public function setPemId($pemId)
    {
        $this->pemId = $pemId;
        $this->queryParameters['PemId'] = $pemId;
        return $this;
    }

    public function getSessionPersistence()
    {
        return $this->sessionPersistence;
    }

    public function setSessionPersistence($sessionPersistence)
    {
        $this->sessionPersistence = $sessionPersistence;
        $this->queryParameters['SessionPersistence'] = $sessionPersistence;
        return $this;
    }

    public function getMaxConnections()
    {
        return $this->maxConnections;
    }

    public function setMaxConnections($maxConnections)
    {
        $this->maxConnections = $maxConnections;
        $this->queryParameters['MaxConnections'] = $maxConnections;
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

    public function getHealthCheckMethod()
    {
        return $this->healthCheckMethod;
    }

    public function setHealthCheckMethod($healthCheckMethod)
    {
        $this->healthCheckMethod = $healthCheckMethod;
        $this->queryParameters['HealthCheckMethod'] = $healthCheckMethod;
        return $this;
    }

    public function getHealthCheckOption()
    {
        return $this->healthCheckOption;
    }

    public function setHealthCheckOption($healthCheckOption)
    {
        $this->healthCheckOption = $healthCheckOption;
        $this->queryParameters['HealthCheckOption'] = $healthCheckOption;
        return $this;
    }

    public function getHealthCheckEnabled()
    {
        return $this->healthCheckEnabled;
    }

    public function setHealthCheckEnabled($healthCheckEnabled)
    {
        $this->healthCheckEnabled = $healthCheckEnabled;
        $this->queryParameters['HealthCheckEnabled'] = $healthCheckEnabled;
        return $this;
    }
}
