<?php

class GetWarehouseListResponse
{

    /**
     * @var ArrayOfWarehouseSummary $GetWarehouseListResult
     */
    protected $GetWarehouseListResult = null;

    /**
     * @param ArrayOfWarehouseSummary $GetWarehouseListResult
     */
    public function __construct($GetWarehouseListResult)
    {
      $this->GetWarehouseListResult = $GetWarehouseListResult;
    }

    /**
     * @return ArrayOfWarehouseSummary
     */
    public function getGetWarehouseListResult()
    {
      return $this->GetWarehouseListResult;
    }

    /**
     * @param ArrayOfWarehouseSummary $GetWarehouseListResult
     * @return GetWarehouseListResponse
     */
    public function setGetWarehouseListResult($GetWarehouseListResult)
    {
      $this->GetWarehouseListResult = $GetWarehouseListResult;
      return $this;
    }

}
