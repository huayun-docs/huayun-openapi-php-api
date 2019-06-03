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
// 调用旧版$request->setOldVersion()
// 调用v2新版$request->setV2Version()，默认是新版
$response = $client->getResponse($request);
print_r($response);
