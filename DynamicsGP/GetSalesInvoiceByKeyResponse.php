<?php

class GetSalesInvoiceByKeyResponse
{

    /**
     * @var SalesInvoice $GetSalesInvoiceByKeyResult
     */
    protected $GetSalesInvoiceByKeyResult = null;

    /**
     * @param SalesInvoice $GetSalesInvoiceByKeyResult
     */
    public function __construct($GetSalesInvoiceByKeyResult)
    {
      $this->GetSalesInvoiceByKeyResult = $GetSalesInvoiceByKeyResult;
    }

    /**
     * @return SalesInvoice
     */
    public function getGetSalesInvoiceByKeyResult()
    {
      return $this->GetSalesInvoiceByKeyResult;
    }

    /**
     * @param SalesInvoice $GetSalesInvoiceByKeyResult
     * @return GetSalesInvoiceByKeyResponse
     */
    public function setGetSalesInvoiceByKeyResult($GetSalesInvoiceByKeyResult)
    {
      $this->GetSalesInvoiceByKeyResult = $GetSalesInvoiceByKeyResult;
      return $this;
    }

}
