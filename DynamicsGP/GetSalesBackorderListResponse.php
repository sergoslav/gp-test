<?php

class GetSalesBackorderListResponse
{

    /**
     * @var ArrayOfSalesBackorderSummary $GetSalesBackorderListResult
     */
    protected $GetSalesBackorderListResult = null;

    /**
     * @param ArrayOfSalesBackorderSummary $GetSalesBackorderListResult
     */
    public function __construct($GetSalesBackorderListResult)
    {
      $this->GetSalesBackorderListResult = $GetSalesBackorderListResult;
    }

    /**
     * @return ArrayOfSalesBackorderSummary
     */
    public function getGetSalesBackorderListResult()
    {
      return $this->GetSalesBackorderListResult;
    }

    /**
     * @param ArrayOfSalesBackorderSummary $GetSalesBackorderListResult
     * @return GetSalesBackorderListResponse
     */
    public function setGetSalesBackorderListResult($GetSalesBackorderListResult)
    {
      $this->GetSalesBackorderListResult = $GetSalesBackorderListResult;
      return $this;
    }

}
