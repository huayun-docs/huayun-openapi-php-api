<?php
/**
 * 删除防火墙
 * @author Tu
 */
namespace ChinacApi\Vpc\V10;

use ChinacApi\Core\RpcRequest;

class DeleteFirewall extends RpcRequest
{
	function  __construct()
	{
		parent::__construct('Vpc', '1.0', 'DeleteFirewall');
	}

	/**
	 * 防火墙Id *(星号为必填，下同)
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
