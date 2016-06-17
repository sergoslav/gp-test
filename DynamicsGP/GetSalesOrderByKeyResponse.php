<?php

class GetSalesOrderByKeyResponse
{

    /**
     * @var SalesOrder $GetSalesOrderByKeyResult
     */
    protected $GetSalesOrderByKeyResult = null;

    /**
     * @param SalesOrder $GetSalesOrderByKeyResult
     */
    public function __construct($GetSalesOrderByKeyResult)
    {
      $this->GetSalesOrderByKeyResult = $GetSalesOrderByKeyResult;
    }

    /**
     * @return SalesOrder
     */
    public function getGetSalesOrderByKeyResult()
    {
      return $this->GetSalesOrderByKeyResult;
    }

    /**
     * @param SalesOrder $GetSalesOrderByKeyResult
     * @return GetSalesOrderByKeyResponse
     */
    public function setGetSalesOrderByKeyResult($GetSalesOrderByKeyResult)
    {
      $this->GetSalesOrderByKeyResult = $GetSalesOrderByKeyResult;
      return $this;
    }

}
