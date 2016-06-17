<?php

class GetInventoryTransferListResponse
{

    /**
     * @var ArrayOfInventoryTransferSummary $GetInventoryTransferListResult
     */
    protected $GetInventoryTransferListResult = null;

    /**
     * @param ArrayOfInventoryTransferSummary $GetInventoryTransferListResult
     */
    public function __construct($GetInventoryTransferListResult)
    {
      $this->GetInventoryTransferListResult = $GetInventoryTransferListResult;
    }

    /**
     * @return ArrayOfInventoryTransferSummary
     */
    public function getGetInventoryTransferListResult()
    {
      return $this->GetInventoryTransferListResult;
    }

    /**
     * @param ArrayOfInventoryTransferSummary $GetInventoryTransferListResult
     * @return GetInventoryTransferListResponse
     */
    public function setGetInventoryTransferListResult($GetInventoryTransferListResult)
    {
      $this->GetInventoryTransferListResult = $GetInventoryTransferListResult;
      return $this;
    }

}
