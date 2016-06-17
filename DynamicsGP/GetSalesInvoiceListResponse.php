<?php

class GetSalesInvoiceListResponse
{

    /**
     * @var ArrayOfSalesInvoiceSummary $GetSalesInvoiceListResult
     */
    protected $GetSalesInvoiceListResult = null;

    /**
     * @param ArrayOfSalesInvoiceSummary $GetSalesInvoiceListResult
     */
    public function __construct($GetSalesInvoiceListResult)
    {
      $this->GetSalesInvoiceListResult = $GetSalesInvoiceListResult;
    }

    /**
     * @return ArrayOfSalesInvoiceSummary
     */
    public function getGetSalesInvoiceListResult()
    {
      return $this->GetSalesInvoiceListResult;
    }

    /**
     * @param ArrayOfSalesInvoiceSummary $GetSalesInvoiceListResult
     * @return GetSalesInvoiceListResponse
     */
    public function setGetSalesInvoiceListResult($GetSalesInvoiceListResult)
    {
      $this->GetSalesInvoiceListResult = $GetSalesInvoiceListResult;
      return $this;
    }

}
