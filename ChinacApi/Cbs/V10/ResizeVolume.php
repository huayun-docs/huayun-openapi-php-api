<?php
/**
 * 云硬盘扩容
 * @author Tu
 */
namespace ChinacApi\Cbs\V10;

use ChinacApi\Core\RpcRequest;

class ResizeVolume extends RpcRequest
{
    function  __construct()
    {
        parent::__construct('Cbs', '1.0', 'ResizeVolume');
    }

    /**
     * 云硬盘Id *(星号为必须，下同)
     * @var string
     */
    private $id;

    /**
     * 扩容后云硬盘大小，必须大于原大小 *
     * @var integer
     */
    private $size;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        $this->queryParameters['Id'] = $id;
        return $this;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function setSize($size)
    {
        $this->size = $size;
        $this->queryParameters['Size'] = $size;
        return $this;
    }
}
