<?php

class GetPurchaseReceiptByKeyResponse
{

    /**
     * @var PurchaseReceipt $GetPurchaseReceiptByKeyResult
     */
    protected $GetPurchaseReceiptByKeyResult = null;

    /**
     * @param PurchaseReceipt $GetPurchaseReceiptByKeyResult
     */
    public function __construct($GetPurchaseReceiptByKeyResult)
    {
      $this->GetPurchaseReceiptByKeyResult = $GetPurchaseReceiptByKeyResult;
    }

    /**
     * @return PurchaseReceipt
     */
    public function getGetPurchaseReceiptByKeyResult()
    {
      return $this->GetPurchaseReceiptByKeyResult;
    }

    /**
     * @param PurchaseReceipt $GetPurchaseReceiptByKeyResult
     * @return GetPurchaseReceiptByKeyResponse
     */
    public function setGetPurchaseReceiptByKeyResult($GetPurchaseReceiptByKeyResult)
    {
      $this->GetPurchaseReceiptByKeyResult = $GetPurchaseReceiptByKeyResult;
      return $this;
    }

}
