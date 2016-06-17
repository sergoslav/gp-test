<?php

class GetInventoryTransferByKeyResponse
{

    /**
     * @var InventoryTransfer $GetInventoryTransferByKeyResult
     */
    protected $GetInventoryTransferByKeyResult = null;

    /**
     * @param InventoryTransfer $GetInventoryTransferByKeyResult
     */
    public function __construct($GetInventoryTransferByKeyResult)
    {
      $this->GetInventoryTransferByKeyResult = $GetInventoryTransferByKeyResult;
    }

    /**
     * @return InventoryTransfer
     */
    public function getGetInventoryTransferByKeyResult()
    {
      return $this->GetInventoryTransferByKeyResult;
    }

    /**
     * @param InventoryTransfer $GetInventoryTransferByKeyResult
     * @return GetInventoryTransferByKeyResponse
     */
    public function setGetInventoryTransferByKeyResult($GetInventoryTransferByKeyResult)
    {
      $this->GetInventoryTransferByKeyResult = $GetInventoryTransferByKeyResult;
      return $this;
    }

}
