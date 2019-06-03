<?php
/**
 * 请求账号用户信息
 * @author Tu
 */
namespace ChinacApi\Person\V10;

use ChinacApi\Core\RpcRequest;

class Personal extends RpcRequest
{
    function  __construct()
    {
        parent::__construct('Person', '2.0', 'Personal');
    }
}
