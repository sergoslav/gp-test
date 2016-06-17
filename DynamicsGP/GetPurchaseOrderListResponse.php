<?php

class GetPurchaseOrderListResponse
{

    /**
     * @var ArrayOfPurchaseOrderSummary $GetPurchaseOrderListResult
     */
    protected $GetPurchaseOrderListResult = null;

    /**
     * @param ArrayOfPurchaseOrderSummary $GetPurchaseOrderListResult
     */
    public function __construct($GetPurchaseOrderListResult)
    {
      $this->GetPurchaseOrderListResult = $GetPurchaseOrderListResult;
    }

    /**
     * @return ArrayOfPurchaseOrderSummary
     */
    public function getGetPurchaseOrderListResult()
    {
      return $this->GetPurchaseOrderListResult;
    }

    /**
     * @param ArrayOfPurchaseOrderSummary $GetPurchaseOrderListResult
     * @return GetPurchaseOrderListResponse
     */
    public function setGetPurchaseOrderListResult($GetPurchaseOrderListResult)
    {
      $this->GetPurchaseOrderListResult = $GetPurchaseOrderListResult;
      return $this;
    }

}
