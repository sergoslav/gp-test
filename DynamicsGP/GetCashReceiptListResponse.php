<?php

class GetCashReceiptListResponse
{

    /**
     * @var ArrayOfCashReceiptSummary $GetCashReceiptListResult
     */
    protected $GetCashReceiptListResult = null;

    /**
     * @param ArrayOfCashReceiptSummary $GetCashReceiptListResult
     */
    public function __construct($GetCashReceiptListResult)
    {
      $this->GetCashReceiptListResult = $GetCashReceiptListResult;
    }

    /**
     * @return ArrayOfCashReceiptSummary
     */
    public function getGetCashReceiptListResult()
    {
      return $this->GetCashReceiptListResult;
    }

    /**
     * @param ArrayOfCashReceiptSummary $GetCashReceiptListResult
     * @return GetCashReceiptListResponse
     */
    public function setGetCashReceiptListResult($GetCashReceiptListResult)
    {
      $this->GetCashReceiptListResult = $GetCashReceiptListResult;
      return $this;
    }

}
