<?php

class GetInventoryAdjustmentListResponse
{

    /**
     * @var ArrayOfInventoryAdjustmentSummary $GetInventoryAdjustmentListResult
     */
    protected $GetInventoryAdjustmentListResult = null;

    /**
     * @param ArrayOfInventoryAdjustmentSummary $GetInventoryAdjustmentListResult
     */
    public function __construct($GetInventoryAdjustmentListResult)
    {
      $this->GetInventoryAdjustmentListResult = $GetInventoryAdjustmentListResult;
    }

    /**
     * @return ArrayOfInventoryAdjustmentSummary
     */
    public function getGetInventoryAdjustmentListResult()
    {
      return $this->GetInventoryAdjustmentListResult;
    }

    /**
     * @param ArrayOfInventoryAdjustmentSummary $GetInventoryAdjustmentListResult
     * @return GetInventoryAdjustmentListResponse
     */
    public function setGetInventoryAdjustmentListResult($GetInventoryAdjustmentListResult)
    {
      $this->GetInventoryAdjustmentListResult = $GetInventoryAdjustmentListResult;
      return $this;
    }

}
