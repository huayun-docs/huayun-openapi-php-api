<?php
/**
 * 调用实例 云主机创建
 * @author Tu
 */

require 'ChinacApi/Init.php';

//依次传入：机房标识、AccessKeyId和AccessKeySecret
$profile = ChinacApi\Core\Profile\Profile::getProfile('cn-wuxi1', '61fabad010044d6c94f43843f123d5ce', 'c4260500a92540059b82fa96501275ce');
$client = new ChinacApi\Core\CClient($profile);

$request = new ChinacApi\Ecs\V10\RunInstance();
$request->setMethod('GET')
	->setName('测试按量api')
	->setImageId('t-ej8hh1dex32l')
	->setInstanceType('1核1G_SERIES_STANDARD')
	->setFirewallId('f-g18hh7tffy34g')
	->setInterface0NetworkId('n-oy8hh7i9na39w')
	->setVolumes0Type('normal')
	->setVolumes0Size(20)
	->setVolumes1Type('normal')
	->setVolumes1Size(20)
	->setPayType('ONDEMAND')
	->setInstanceSeries('SERIES_STANDARD');
$response = $client->getResponse($request);
print_r($response);
