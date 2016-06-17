<?php

class GetInventoriedItemByKeyResponse
{

    /**
     * @var InventoriedItem $GetInventoriedItemByKeyResult
     */
    protected $GetInventoriedItemByKeyResult = null;

    /**
     * @param InventoriedItem $GetInventoriedItemByKeyResult
     */
    public function __construct($GetInventoriedItemByKeyResult)
    {
      $this->GetInventoriedItemByKeyResult = $GetInventoriedItemByKeyResult;
    }

    /**
     * @return InventoriedItem
     */
    public function getGetInventoriedItemByKeyResult()
    {
      return $this->GetInventoriedItemByKeyResult;
    }

    /**
     * @param InventoriedItem $GetInventoriedItemByKeyResult
     * @return GetInventoriedItemByKeyResponse
     */
    public function setGetInventoriedItemByKeyResult($GetInventoriedItemByKeyResult)
    {
      $this->GetInventoriedItemByKeyResult = $GetInventoriedItemByKeyResult;
      return $this;
    }

}
