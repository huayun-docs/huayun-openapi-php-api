<?php
/**
 * 云硬盘挂载云主机
 * @author Tu
 */
namespace ChinacApi\Cbs\V10;

use ChinacApi\Core\RpcRequest;

class AttachVolume extends RpcRequest
{
	function  __construct()
	{
		parent::__construct('Cbs', '1.0', 'AttachVolume');
	}

	/**
	 * 云硬盘Id *(星号为必须，下同)
	 * @var string
	 */
	private $volumeId;

	/**
	 * 挂载的云主机Id *
	 * @var string
	 */
	private $instanceId;

	public function getVolumeId()
	{
		return $this->volumeId;
	}

	public function setVolumeId($volumeId)
	{
		$this->volumeId = $volumeId;
		$this->queryParameters['VolumeId'] = $volumeId;
		return $this;
	}

	public function geInstanceId()
	{
		return $this->instanceId;
	}

	public function setInstanceId($instanceId)
	{
		$this->instanceId = $instanceId;
		$this->queryParameters['InstanceId'] = $instanceId;
		return $this;
	}
}
