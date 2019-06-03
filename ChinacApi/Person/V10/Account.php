<?php
/**
 * 请求账号余额信息
 * @author Tu
 */
namespace ChinacApi\Person\V10;

use ChinacApi\Core\RpcRequest;

class Account extends RpcRequest
{
    function  __construct()
    {
        parent::__construct('Person', '2.0', 'Account');
    }
}
