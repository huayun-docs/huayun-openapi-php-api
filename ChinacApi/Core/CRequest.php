<?php
/**
 * 通信父类
 * @author Tu
 */
namespace ChinacApi\Core;

abstract class CRequest
{
    protected $version = '1.0';
    protected $product;
    protected $actionName;
    protected $regionId;
    protected $method = 'GET';
    protected $protocolType = 'http';
    protected $content;

    protected $queryParameters = [];
    protected $headers = [];

    function __construct($product, $version, $actionName)
    {
        $this->headers['x-sdk-client'] = 'php/1.0';
        $this->product = $product;
        $this->version = $version;
        $this->actionName = $actionName;
    }

    public abstract function composeUrl($iSigner, $credential);

    public function getVersion()
    {
        return $this->version;
    }

    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    public function getProduct()
    {
        return $this->product;
    }

    public function setProduct($product)
    {
        $this->product = $product;
        return $this;
    }

    public function getActionName()
    {
        return $this->actionName;
    }

    public function setActionName($actionName)
    {
        $this->actionName = $actionName;
        return $this;
    }

    public function getQueryParameters()
    {
        return $this->queryParameters;
    }

    public function getHeaders()
    {
        return $this->headers;
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function setMethod($method)
    {
        $this->method = $method;
        return $this;
    }

    public function getProtocol()
    {
        return $this->protocolType;
    }

    public function setProtocol($protocol)
    {
        $this->protocolType = $protocol;
        return $this;
    }

    public function getRegionId()
    {
        return $this->regionId;
    }

    public function setRegionId($region)
    {
        $this->regionId = $region;
        return $this;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    public function getContentType()
    {
        return $this->contentType;
    }

    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
        return $this;
    }

    public function getRequestUrl()
    {
        return $this->requestUrl;
    }

    public function setRequestUrl($requestUrl)
    {
        $this->requestUrl = $requestUrl;
        return $this;
    }

    public function addHeader($headerKey, $headerValue)
    {
        $this->headers[$headerKey] = $headerValue;
        return $this;
    }

    public function __get($name)
    {
        if (method_exists($this, "get{$name}")) {
            return $this->{"get{$name}"}();
        }
        return $this;
    }

    public function __set($name, $value)
    {
        if (method_exists($this, "set{$name}")) {
            return $this->{"set{$name}"}($value);
        }
        return $this;
    }
}
