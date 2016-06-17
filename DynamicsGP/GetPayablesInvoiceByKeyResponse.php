<?php

class GetPayablesInvoiceByKeyResponse
{

    /**
     * @var PayablesInvoice $GetPayablesInvoiceByKeyResult
     */
    protected $GetPayablesInvoiceByKeyResult = null;

    /**
     * @param PayablesInvoice $GetPayablesInvoiceByKeyResult
     */
    public function __construct($GetPayablesInvoiceByKeyResult)
    {
      $this->GetPayablesInvoiceByKeyResult = $GetPayablesInvoiceByKeyResult;
    }

    /**
     * @return PayablesInvoice
     */
    public function getGetPayablesInvoiceByKeyResult()
    {
      return $this->GetPayablesInvoiceByKeyResult;
    }

    /**
     * @param PayablesInvoice $GetPayablesInvoiceByKeyResult
     * @return GetPayablesInvoiceByKeyResponse
     */
    public function setGetPayablesInvoiceByKeyResult($GetPayablesInvoiceByKeyResult)
    {
      $this->GetPayablesInvoiceByKeyResult = $GetPayablesInvoiceByKeyResult;
      return $this;
    }

}
