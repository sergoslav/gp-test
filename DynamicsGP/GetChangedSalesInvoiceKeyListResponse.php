<?php

class GetChangedSalesInvoiceKeyListResponse
{

    /**
     * @var ArrayOfChangedSalesInvoiceKey $GetChangedSalesInvoiceKeyListResult
     */
    protected $GetChangedSalesInvoiceKeyListResult = null;

    /**
     * @param ArrayOfChangedSalesInvoiceKey $GetChangedSalesInvoiceKeyListResult
     */
    public function __construct($GetChangedSalesInvoiceKeyListResult)
    {
      $this->GetChangedSalesInvoiceKeyListResult = $GetChangedSalesInvoiceKeyListResult;
    }

    /**
     * @return ArrayOfChangedSalesInvoiceKey
     */
    public function getGetChangedSalesInvoiceKeyListResult()
    {
      return $this->GetChangedSalesInvoiceKeyListResult;
    }

    /**
     * @param ArrayOfChangedSalesInvoiceKey $GetChangedSalesInvoiceKeyListResult
     * @return GetChangedSalesInvoiceKeyListResponse
     */
    public function setGetChangedSalesInvoiceKeyListResult($GetChangedSalesInvoiceKeyListResult)
    {
      $this->GetChangedSalesInvoiceKeyListResult = $GetChangedSalesInvoiceKeyListResult;
      return $this;
    }

}
