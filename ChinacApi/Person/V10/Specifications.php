<?php
/**
 * 请求获取云主机型号信息
 * @author Tu
 */
namespace ChinacApi\Person\V10;

use ChinacApi\Core\RpcRequest;

class Specifications extends RpcRequest
{
    function  __construct()
    {
        parent::__construct('Person', '2.0', 'Specifications');
    }
}
