<?php

class GetPurchaseReceiptListResponse
{

    /**
     * @var ArrayOfPurchaseReceiptSummary $GetPurchaseReceiptListResult
     */
    protected $GetPurchaseReceiptListResult = null;

    /**
     * @param ArrayOfPurchaseReceiptSummary $GetPurchaseReceiptListResult
     */
    public function __construct($GetPurchaseReceiptListResult)
    {
      $this->GetPurchaseReceiptListResult = $GetPurchaseReceiptListResult;
    }

    /**
     * @return ArrayOfPurchaseReceiptSummary
     */
    public function getGetPurchaseReceiptListResult()
    {
      return $this->GetPurchaseReceiptListResult;
    }

    /**
     * @param ArrayOfPurchaseReceiptSummary $GetPurchaseReceiptListResult
     * @return GetPurchaseReceiptListResponse
     */
    public function setGetPurchaseReceiptListResult($GetPurchaseReceiptListResult)
    {
      $this->GetPurchaseReceiptListResult = $GetPurchaseReceiptListResult;
      return $this;
    }

}
