<?php
/**
 * 删除镜像
 * @author Tu
 */
namespace ChinacApi\Ecs\V10;

use ChinacApi\Core\RpcRequest;

class DeleteImage extends RpcRequest
{
	function  __construct()
	{
		parent::__construct('Ecs', '1.0', 'DeleteImage');
	}

	/**
	 * 镜像Id *(星号为必填，下同)
	 * @var string
	 */
	private $id;

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
}
