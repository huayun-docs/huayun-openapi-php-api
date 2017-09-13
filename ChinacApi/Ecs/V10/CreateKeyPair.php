<?php
/**
 * 创建一个密钥对
 * @author Tu
 */
namespace ChinacApi\Ecs\V10;

use ChinacApi\Core\RpcRequest;

class CreateKeyPair extends RpcRequest
{
	function  __construct()
	{
		parent::__construct('Ecs', '1.0', 'CreateKeyPair');
	}

	/**
	 * 加密方式 RSA DSA
	 * @var string
	 */
	private $encryption;

	/**
	 * 密钥名称
	 * @var string
	 */
	private $name;

	/**
	 * 密钥描述
	 * @var string
	 */
	private $description;

	public function getEncryption()
	{
		return $this->encryption;
	}

	public function setEncryption($encryption)
	{
		$this->encryption = $encryption;
		$this->queryParameters['Encryption'] = $encryption;
		return $this;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setName($name)
	{
		$this->name = $name;
		$this->queryParameters['Name'] = $name;
		return $this;
	}

	public function getDescription()
	{
		return $this->description;
	}

	public function setDescription($description)
	{
		$this->description = $description;
		$this->queryParameters['Description'] = $description;
		return $this;
	}
}
