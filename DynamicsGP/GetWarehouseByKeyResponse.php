<?php

class GetWarehouseByKeyResponse
{

    /**
     * @var Warehouse $GetWarehouseByKeyResult
     */
    protected $GetWarehouseByKeyResult = null;

    /**
     * @param Warehouse $GetWarehouseByKeyResult
     */
    public function __construct($GetWarehouseByKeyResult)
    {
      $this->GetWarehouseByKeyResult = $GetWarehouseByKeyResult;
    }

    /**
     * @return Warehouse
     */
    public function getGetWarehouseByKeyResult()
    {
      return $this->GetWarehouseByKeyResult;
    }

    /**
     * @param Warehouse $GetWarehouseByKeyResult
     * @return GetWarehouseByKeyResponse
     */
    public function setGetWarehouseByKeyResult($GetWarehouseByKeyResult)
    {
      $this->GetWarehouseByKeyResult = $GetWarehouseByKeyResult;
      return $this;
    }

}
