<?php

class GetSalesOrderListResponse
{

    /**
     * @var ArrayOfSalesOrderSummary $GetSalesOrderListResult
     */
    protected $GetSalesOrderListResult = null;

    /**
     * @param ArrayOfSalesOrderSummary $GetSalesOrderListResult
     */
    public function __construct($GetSalesOrderListResult)
    {
      $this->GetSalesOrderListResult = $GetSalesOrderListResult;
    }

    /**
     * @return ArrayOfSalesOrderSummary
     */
    public function getGetSalesOrderListResult()
    {
      return $this->GetSalesOrderListResult;
    }

    /**
     * @param ArrayOfSalesOrderSummary $GetSalesOrderListResult
     * @return GetSalesOrderListResponse
     */
    public function setGetSalesOrderListResult($GetSalesOrderListResult)
    {
      $this->GetSalesOrderListResult = $GetSalesOrderListResult;
      return $this;
    }

}
