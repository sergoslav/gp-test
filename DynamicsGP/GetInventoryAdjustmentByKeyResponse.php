<?php

class GetInventoryAdjustmentByKeyResponse
{

    /**
     * @var InventoryAdjustment $GetInventoryAdjustmentByKeyResult
     */
    protected $GetInventoryAdjustmentByKeyResult = null;

    /**
     * @param InventoryAdjustment $GetInventoryAdjustmentByKeyResult
     */
    public function __construct($GetInventoryAdjustmentByKeyResult)
    {
      $this->GetInventoryAdjustmentByKeyResult = $GetInventoryAdjustmentByKeyResult;
    }

    /**
     * @return InventoryAdjustment
     */
    public function getGetInventoryAdjustmentByKeyResult()
    {
      return $this->GetInventoryAdjustmentByKeyResult;
    }

    /**
     * @param InventoryAdjustment $GetInventoryAdjustmentByKeyResult
     * @return GetInventoryAdjustmentByKeyResponse
     */
    public function setGetInventoryAdjustmentByKeyResult($GetInventoryAdjustmentByKeyResult)
    {
      $this->GetInventoryAdjustmentByKeyResult = $GetInventoryAdjustmentByKeyResult;
      return $this;
    }

}
