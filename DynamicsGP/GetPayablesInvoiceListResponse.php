<?php

class GetPayablesInvoiceListResponse
{

    /**
     * @var ArrayOfPayablesInvoiceSummary $GetPayablesInvoiceListResult
     */
    protected $GetPayablesInvoiceListResult = null;

    /**
     * @param ArrayOfPayablesInvoiceSummary $GetPayablesInvoiceListResult
     */
    public function __construct($GetPayablesInvoiceListResult)
    {
      $this->GetPayablesInvoiceListResult = $GetPayablesInvoiceListResult;
    }

    /**
     * @return ArrayOfPayablesInvoiceSummary
     */
    public function getGetPayablesInvoiceListResult()
    {
      return $this->GetPayablesInvoiceListResult;
    }

    /**
     * @param ArrayOfPayablesInvoiceSummary $GetPayablesInvoiceListResult
     * @return GetPayablesInvoiceListResponse
     */
    public function setGetPayablesInvoiceListResult($GetPayablesInvoiceListResult)
    {
      $this->GetPayablesInvoiceListResult = $GetPayablesInvoiceListResult;
      return $this;
    }

}
