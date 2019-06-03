<?php
/**
 * 获取消费统计
 * @author Tu
 */
namespace ChinacApi\Person\V10;

use ChinacApi\Core\RpcRequest;

class BillStatistic extends RpcRequest
{
    function  __construct()
    {
        parent::__construct('Person', '2.0', 'BillStatistic');
    }

    /**
     * 查询的消费日期，格式Y-m，如2019-05
     * @var [type]
     */
    private $dates;

    public function getDates()
    {
        return $this->dates;
    }

    public function setDates($dates)
    {
        $this->dates = $dates;
        $this->queryParameters['Dates'] = $dates;
        return $this;
    }
}
