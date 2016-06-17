<?php

class GetCustomerListResponse
{

    /**
     * @var ArrayOfCustomerSummary $GetCustomerListResult
     */
    protected $GetCustomerListResult = null;

    /**
     * @param ArrayOfCustomerSummary $GetCustomerListResult
     */
    public function __construct($GetCustomerListResult)
    {
      $this->GetCustomerListResult = $GetCustomerListResult;
    }

    /**
     * @return ArrayOfCustomerSummary
     */
    public function getGetCustomerListResult()
    {
      return $this->GetCustomerListResult;
    }

    /**
     * @param ArrayOfCustomerSummary $GetCustomerListResult
     * @return GetCustomerListResponse
     */
    public function setGetCustomerListResult($GetCustomerListResult)
    {
      $this->GetCustomerListResult = $GetCustomerListResult;
      return $this;
    }

}
