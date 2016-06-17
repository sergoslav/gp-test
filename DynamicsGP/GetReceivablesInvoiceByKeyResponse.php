<?php

class GetReceivablesInvoiceByKeyResponse
{

    /**
     * @var ReceivablesInvoice $GetReceivablesInvoiceByKeyResult
     */
    protected $GetReceivablesInvoiceByKeyResult = null;

    /**
     * @param ReceivablesInvoice $GetReceivablesInvoiceByKeyResult
     */
    public function __construct($GetReceivablesInvoiceByKeyResult)
    {
      $this->GetReceivablesInvoiceByKeyResult = $GetReceivablesInvoiceByKeyResult;
    }

    /**
     * @return ReceivablesInvoice
     */
    public function getGetReceivablesInvoiceByKeyResult()
    {
      return $this->GetReceivablesInvoiceByKeyResult;
    }

    /**
     * @param ReceivablesInvoice $GetReceivablesInvoiceByKeyResult
     * @return GetReceivablesInvoiceByKeyResponse
     */
    public function setGetReceivablesInvoiceByKeyResult($GetReceivablesInvoiceByKeyResult)
    {
      $this->GetReceivablesInvoiceByKeyResult = $GetReceivablesInvoiceByKeyResult;
      return $this;
    }

}
