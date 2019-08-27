<?php
/**
 * 绑定负载均衡器实例后端服务策略
 * @author Tu
 */
namespace ChinacApi\Clb\V10;

use ChinacApi\Core\RpcRequest;

class AttachLBBackendPolicy extends RpcRequest
{
    /**
     * 后端服务ID *(带星号必填，下同)
     * @var string
     */
    private $lBBackendId;

    /**
     * 转发策略ID *
     * @var string
     */
    private $lBPolicyId;

    function  __construct()
    {
        parent::__construct('Clb', '1.0', 'AttachLBBackendPolicy');
    }

    public function getLBBackendId()
    {
        return $this->lBBackendId;
    }

    public function setLBBackendId($lBBackendId)
    {
        $this->lBBackendId = $lBBackendId;
        $this->queryParameters['LBBackendId'] = $lBBackendId;
        return $this;
    }

    public function getLBPolicyId()
    {
        return $this->lBPolicyId;
    }

    public function setLBPolicyId($lBPolicyId)
    {
        $this->lBPolicyId = $lBPolicyId;
        $this->queryParameters['LBPolicyId'] = $lBPolicyId;
        return $this;
    }
}
