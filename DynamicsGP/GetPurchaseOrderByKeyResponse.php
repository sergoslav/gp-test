<?php

class GetPurchaseOrderByKeyResponse
{

    /**
     * @var PurchaseOrder $GetPurchaseOrderByKeyResult
     */
    protected $GetPurchaseOrderByKeyResult = null;

    /**
     * @param PurchaseOrder $GetPurchaseOrderByKeyResult
     */
    public function __construct($GetPurchaseOrderByKeyResult)
    {
      $this->GetPurchaseOrderByKeyResult = $GetPurchaseOrderByKeyResult;
    }

    /**
     * @return PurchaseOrder
     */
    public function getGetPurchaseOrderByKeyResult()
    {
      return $this->GetPurchaseOrderByKeyResult;
    }

    /**
     * @param PurchaseOrder $GetPurchaseOrderByKeyResult
     * @return GetPurchaseOrderByKeyResponse
     */
    public function setGetPurchaseOrderByKeyResult($GetPurchaseOrderByKeyResult)
    {
      $this->GetPurchaseOrderByKeyResult = $GetPurchaseOrderByKeyResult;
      return $this;
    }

}
