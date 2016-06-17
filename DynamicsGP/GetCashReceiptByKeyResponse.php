<?php

class GetCashReceiptByKeyResponse
{

    /**
     * @var CashReceipt $GetCashReceiptByKeyResult
     */
    protected $GetCashReceiptByKeyResult = null;

    /**
     * @param CashReceipt $GetCashReceiptByKeyResult
     */
    public function __construct($GetCashReceiptByKeyResult)
    {
      $this->GetCashReceiptByKeyResult = $GetCashReceiptByKeyResult;
    }

    /**
     * @return CashReceipt
     */
    public function getGetCashReceiptByKeyResult()
    {
      return $this->GetCashReceiptByKeyResult;
    }

    /**
     * @param CashReceipt $GetCashReceiptByKeyResult
     * @return GetCashReceiptByKeyResponse
     */
    public function setGetCashReceiptByKeyResult($GetCashReceiptByKeyResult)
    {
      $this->GetCashReceiptByKeyResult = $GetCashReceiptByKeyResult;
      return $this;
    }

}
