<?php

class GetSalesReturnListResponse
{

    /**
     * @var ArrayOfSalesReturnSummary $GetSalesReturnListResult
     */
    protected $GetSalesReturnListResult = null;

    /**
     * @param ArrayOfSalesReturnSummary $GetSalesReturnListResult
     */
    public function __construct($GetSalesReturnListResult)
    {
      $this->GetSalesReturnListResult = $GetSalesReturnListResult;
    }

    /**
     * @return ArrayOfSalesReturnSummary
     */
    public function getGetSalesReturnListResult()
    {
      return $this->GetSalesReturnListResult;
    }

    /**
     * @param ArrayOfSalesReturnSummary $GetSalesReturnListResult
     * @return GetSalesReturnListResponse
     */
    public function setGetSalesReturnListResult($GetSalesReturnListResult)
    {
      $this->GetSalesReturnListResult = $GetSalesReturnListResult;
      return $this;
    }

}
