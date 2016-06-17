<?php

class GetPurchaseInvoiceListResponse
{

    /**
     * @var ArrayOfPurchaseInvoiceSummary $GetPurchaseInvoiceListResult
     */
    protected $GetPurchaseInvoiceListResult = null;

    /**
     * @param ArrayOfPurchaseInvoiceSummary $GetPurchaseInvoiceListResult
     */
    public function __construct($GetPurchaseInvoiceListResult)
    {
      $this->GetPurchaseInvoiceListResult = $GetPurchaseInvoiceListResult;
    }

    /**
     * @return ArrayOfPurchaseInvoiceSummary
     */
    public function getGetPurchaseInvoiceListResult()
    {
      return $this->GetPurchaseInvoiceListResult;
    }

    /**
     * @param ArrayOfPurchaseInvoiceSummary $GetPurchaseInvoiceListResult
     * @return GetPurchaseInvoiceListResponse
     */
    public function setGetPurchaseInvoiceListResult($GetPurchaseInvoiceListResult)
    {
      $this->GetPurchaseInvoiceListResult = $GetPurchaseInvoiceListResult;
      return $this;
    }

}
