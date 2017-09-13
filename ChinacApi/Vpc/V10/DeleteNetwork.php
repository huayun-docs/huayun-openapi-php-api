<?php
/**
 * 删除私有网络
 * @author Tu
 */
namespace ChinacApi\Vpc\V10;

use ChinacApi\Core\RpcRequest;

class DeleteNetwork extends RpcRequest
{
	function  __construct()
	{
		parent::__construct('Vpc', '1.0', 'DeleteNetwork');
	}

	/**
	 * 私网Id *(星号为必填，下同)
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
