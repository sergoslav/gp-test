<?php

class GetItemWarehouseByKeyResponse
{

    /**
     * @var ItemWarehouse $GetItemWarehouseByKeyResult
     */
    protected $GetItemWarehouseByKeyResult = null;

    /**
     * @param ItemWarehouse $GetItemWarehouseByKeyResult
     */
    public function __construct($GetItemWarehouseByKeyResult)
    {
      $this->GetItemWarehouseByKeyResult = $GetItemWarehouseByKeyResult;
    }

    /**
     * @return ItemWarehouse
     */
    public function getGetItemWarehouseByKeyResult()
    {
      return $this->GetItemWarehouseByKeyResult;
    }

    /**
     * @param ItemWarehouse $GetItemWarehouseByKeyResult
     * @return GetItemWarehouseByKeyResponse
     */
    public function setGetItemWarehouseByKeyResult($GetItemWarehouseByKeyResult)
    {
      $this->GetItemWarehouseByKeyResult = $GetItemWarehouseByKeyResult;
      return $this;
    }

}
