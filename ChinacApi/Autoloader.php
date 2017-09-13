<?php
/**
 * 自动加载
 * @author Tu
 */
namespace ChinacApi;

class Autoloader
{
    private $directory;
    private $prefix;
    private $prefixLength;

    /**
     * @param string $baseDirectory 基本目录
     */
    public function __construct($baseDirectory = __DIR__)
    {
        $this->directory = $baseDirectory;
        $this->prefix = __NAMESPACE__ . '\\';
        $this->prefixLength = strlen($this->prefix);
    }

    /**
     * 注册自动加载
     * @param bool $prepend
     */
    public static function register($prepend = false)
    {
        spl_autoload_register([new self(), 'autoload'], true, $prepend);
    }

    /**
     * 从文件中加载类名
     *
     * @param string $className 全名类
     */
    public function autoload($className)
    {
        if (0 === strpos($className, $this->prefix)) {
            $parts = explode('\\', substr($className, $this->prefixLength));
            $filepath = $this->directory . DIRECTORY_SEPARATOR . implode(DIRECTORY_SEPARATOR, $parts) . '.php';

            if (is_file($filepath)) {
                require $filepath;
            }
        }
    }
}
