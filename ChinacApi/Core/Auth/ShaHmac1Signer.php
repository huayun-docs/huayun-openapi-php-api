<?php
/**
 * sha1签名
 * @author Tu
 */
namespace ChinacApi\Core\Auth;

use ChinacApi\Core\Auth\CSigner;

class ShaHmac1Signer implements CSigner
{
    public function signString($source, $accessSecret)
    {
        return base64_encode(hash_hmac('sha1', $source, $accessSecret, true));
    }
    
    public function getSignatureMethod()
    {
        return 'HMAC-SHA1';
    }

    public function getSignatureVersion()
    {
        return '1.0';
    }
}
