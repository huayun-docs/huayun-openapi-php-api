<?php
/**
 * 删除负载均衡器实例
 * @author Tu
 */
namespace ChinacApi\Clb\V10;

use ChinacApi\Core\RpcRequest;

class DeleteLoadBalancer extends RpcRequest
{
    /**
     * 均衡器Id *(星号为必须，下同)
     * @var string
     */
    private $id;

    /**
     * 是否删除关联公网IP，默认否
     * @var string
     */
    private $releaseEipFlag;

    function  __construct()
    {
        parent::__construct('Clb', '1.0', 'DeleteLoadBalancer');
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

    public function getReleaseEipFlag()
    {
        return $this->releaseEipFlag;
    }

    public function setReleaseEipFlag($releaseEipFlag)
    {
        $this->releaseEipFlag = $releaseEipFlag;
        $this->queryParameters['ReleaseEipFlag'] = $releaseEipFlag;
        return $this;
    }
}
