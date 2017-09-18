<?php
/**
 * 核心配置
 * @author Tu
 */
namespace ChinacApi;

//通信地址
defined('HTTP_REQUEST_URL') or define('HTTP_REQUEST_URL', 'https://api.chinac.com');

//设置代理
defined('ENABLE_HTTP_PROXY') or define('ENABLE_HTTP_PROXY', false);
defined('HTTP_PROXY_IP') or define('HTTP_PROXY_IP', '127.0.0.1');
defined('HTTP_PROXY_PORT') or define('HTTP_PROXY_PORT', '8888');
