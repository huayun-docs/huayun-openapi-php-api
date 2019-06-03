<?php
/**
 * 前期工作
 * @author Tu
 */
namespace ChinacApi\Core\Profile;

use ChinacApi\Core\Auth\Credential;
use ChinacApi\Core\Auth\ShaHmac256Signer;

class Profile
{
    private static $profile;
    private static $credential;
    private static $regionId;
    private static $isigner;
    private static $iCredential;
    
    private function  __construct($regionId, $credential)
    {
        self::$regionId = $regionId;
        self::$credential = $credential;
    }
    
    /**
     * 初始化必要参数
     * @param  string $regionId     机房标识
     * @param  string $accessKeyId
     * @param  string $accessSecret
     * @return this
     */
    public static function getProfile($regionId, $accessKeyId, $accessSecret)
    {
        $credential = new Credential($accessKeyId, $accessSecret);
        self::$profile = new Profile($regionId, $credential);
        return self::$profile;
    }
    
    public function getSigner()
    {
        if (null == self::$isigner) {
            self::$isigner = new ShaHmac256Signer(); 
        }

        return self::$isigner;
    }
    
    public function getCredential()
    {
        if (null == self::$credential && null != self::$iCredential) {
            self::$credential = self::$iCredential;
        }

        return self::$credential;
    }

    public function getRegionId()
    {
        return self::$regionId;
    }
}
