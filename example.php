<?php
/**
 * 调用实例 云主机查询
 * @author Tu
 */

require 'ChinacApi/Init.php';

//依次传入：机房标识、AccessKeyId和AccessKeySecret
$profile = ChinacApi\Core\Profile\Profile::getProfile('region-tag', 'AccessKeyId', 'AccessKeySecret');
$client = new ChinacApi\Core\CClient($profile);

$request = new ChinacApi\Ecs\V10\DescribeInstances();
$request->setMethod('GET')->setCount(1);
$response = $client->getResponse($request);
print_r($response);
