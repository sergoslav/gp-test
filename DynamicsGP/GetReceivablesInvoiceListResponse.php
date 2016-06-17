<?php

class GetReceivablesInvoiceListResponse
{

    /**
     * @var ArrayOfReceivablesInvoiceSummary $GetReceivablesInvoiceListResult
     */
    protected $GetReceivablesInvoiceListResult = null;

    /**
     * @param ArrayOfReceivablesInvoiceSummary $GetReceivablesInvoiceListResult
     */
    public function __construct($GetReceivablesInvoiceListResult)
    {
      $this->GetReceivablesInvoiceListResult = $GetReceivablesInvoiceListResult;
    }

    /**
     * @return ArrayOfReceivablesInvoiceSummary
     */
    public function getGetReceivablesInvoiceListResult()
    {
      return $this->GetReceivablesInvoiceListResult;
    }

    /**
     * @param ArrayOfReceivablesInvoiceSummary $GetReceivablesInvoiceListResult
     * @return GetReceivablesInvoiceListResponse
     */
    public function setGetReceivablesInvoiceListResult($GetReceivablesInvoiceListResult)
    {
      $this->GetReceivablesInvoiceListResult = $GetReceivablesInvoiceListResult;
      return $this;
    }

}
