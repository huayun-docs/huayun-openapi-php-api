<?php
/**
 * 返回
 * @author Tu
 */
namespace ChinacApi\Core\Http;

class CResponse
{
    private $body;
    private $status;
    
    public function getBody()
    {
        return $this->body;
    }
    
    public function setBody($body)
    {
        $this->body = $body;
    }
    
    public function getStatus()
    {
        return $this->status;
    }
    
    public function setStatus($status)
    {
        $this->status = $status;
    }
    
    public function isSuccess()
    {
        return in_array($this->status, [200, 201, 204, 206]);
    }
}
