<?php
/**
 * 签名接口
 * @author Tu
 */
namespace ChinacApi\Core\Auth;

interface CSigner
{
    public function getSignatureMethod();
    
    public function getSignatureVersion();
    
    public function signString($source, $accessSecret);
}
