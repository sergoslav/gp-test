<?php

class GetCustomerReceivablesSummaryByKeyResponse
{

    /**
     * @var CustomerReceivablesSummary $GetCustomerReceivablesSummaryByKeyResult
     */
    protected $GetCustomerReceivablesSummaryByKeyResult = null;

    /**
     * @param CustomerReceivablesSummary $GetCustomerReceivablesSummaryByKeyResult
     */
    public function __construct($GetCustomerReceivablesSummaryByKeyResult)
    {
      $this->GetCustomerReceivablesSummaryByKeyResult = $GetCustomerReceivablesSummaryByKeyResult;
    }

    /**
     * @return CustomerReceivablesSummary
     */
    public function getGetCustomerReceivablesSummaryByKeyResult()
    {
      return $this->GetCustomerReceivablesSummaryByKeyResult;
    }

    /**
     * @param CustomerReceivablesSummary $GetCustomerReceivablesSummaryByKeyResult
     * @return GetCustomerReceivablesSummaryByKeyResponse
     */
    public function setGetCustomerReceivablesSummaryByKeyResult($GetCustomerReceivablesSummaryByKeyResult)
    {
      $this->GetCustomerReceivablesSummaryByKeyResult = $GetCustomerReceivablesSummaryByKeyResult;
      return $this;
    }

}
