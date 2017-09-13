<?php
/**
 * sha256签名
 * @author Tu
 */
namespace ChinacApi\Core\Auth;

use ChinacApi\Core\Auth\CSigner;

class ShaHmac256Signer implements CSigner
{
    public function signString($source, $accessSecret)
    {
        return base64_encode(hash_hmac('sha256', $source, $accessSecret, true));
    }
    
    public function getSignatureMethod()
    {
        return 'HMAC-SHA256';
    }

    public function getSignatureVersion()
    {
        return '1.0';
    }
}
