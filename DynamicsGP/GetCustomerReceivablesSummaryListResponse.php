<?php

class GetCustomerReceivablesSummaryListResponse
{

    /**
     * @var ArrayOfCustomerReceivablesSummary $GetCustomerReceivablesSummaryListResult
     */
    protected $GetCustomerReceivablesSummaryListResult = null;

    /**
     * @param ArrayOfCustomerReceivablesSummary $GetCustomerReceivablesSummaryListResult
     */
    public function __construct($GetCustomerReceivablesSummaryListResult)
    {
      $this->GetCustomerReceivablesSummaryListResult = $GetCustomerReceivablesSummaryListResult;
    }

    /**
     * @return ArrayOfCustomerReceivablesSummary
     */
    public function getGetCustomerReceivablesSummaryListResult()
    {
      return $this->GetCustomerReceivablesSummaryListResult;
    }

    /**
     * @param ArrayOfCustomerReceivablesSummary $GetCustomerReceivablesSummaryListResult
     * @return GetCustomerReceivablesSummaryListResponse
     */
    public function setGetCustomerReceivablesSummaryListResult($GetCustomerReceivablesSummaryListResult)
    {
      $this->GetCustomerReceivablesSummaryListResult = $GetCustomerReceivablesSummaryListResult;
      return $this;
    }

}
