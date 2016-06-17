<?php

class GetPurchaseInvoiceByKeyResponse
{

    /**
     * @var PurchaseInvoice $GetPurchaseInvoiceByKeyResult
     */
    protected $GetPurchaseInvoiceByKeyResult = null;

    /**
     * @param PurchaseInvoice $GetPurchaseInvoiceByKeyResult
     */
    public function __construct($GetPurchaseInvoiceByKeyResult)
    {
      $this->GetPurchaseInvoiceByKeyResult = $GetPurchaseInvoiceByKeyResult;
    }

    /**
     * @return PurchaseInvoice
     */
    public function getGetPurchaseInvoiceByKeyResult()
    {
      return $this->GetPurchaseInvoiceByKeyResult;
    }

    /**
     * @param PurchaseInvoice $GetPurchaseInvoiceByKeyResult
     * @return GetPurchaseInvoiceByKeyResponse
     */
    public function setGetPurchaseInvoiceByKeyResult($GetPurchaseInvoiceByKeyResult)
    {
      $this->GetPurchaseInvoiceByKeyResult = $GetPurchaseInvoiceByKeyResult;
      return $this;
    }

}
