<?php
/**
 * 请求获取机房信息
 * @author Tu
 */
namespace ChinacApi\Person\V10;

use ChinacApi\Core\RpcRequest;

class DescribeRegions extends RpcRequest
{
    function  __construct()
    {
        parent::__construct('Person', '2.0', 'DescribeRegions');
    }
}
