<?php

class GetSalesBackorderByKeyResponse
{

    /**
     * @var SalesBackorder $GetSalesBackorderByKeyResult
     */
    protected $GetSalesBackorderByKeyResult = null;

    /**
     * @param SalesBackorder $GetSalesBackorderByKeyResult
     */
    public function __construct($GetSalesBackorderByKeyResult)
    {
      $this->GetSalesBackorderByKeyResult = $GetSalesBackorderByKeyResult;
    }

    /**
     * @return SalesBackorder
     */
    public function getGetSalesBackorderByKeyResult()
    {
      return $this->GetSalesBackorderByKeyResult;
    }

    /**
     * @param SalesBackorder $GetSalesBackorderByKeyResult
     * @return GetSalesBackorderByKeyResponse
     */
    public function setGetSalesBackorderByKeyResult($GetSalesBackorderByKeyResult)
    {
      $this->GetSalesBackorderByKeyResult = $GetSalesBackorderByKeyResult;
      return $this;
    }

}
