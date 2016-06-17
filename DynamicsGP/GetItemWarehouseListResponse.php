<?php

class GetItemWarehouseListResponse
{

    /**
     * @var ArrayOfItemWarehouseSummary $GetItemWarehouseListResult
     */
    protected $GetItemWarehouseListResult = null;

    /**
     * @param ArrayOfItemWarehouseSummary $GetItemWarehouseListResult
     */
    public function __construct($GetItemWarehouseListResult)
    {
      $this->GetItemWarehouseListResult = $GetItemWarehouseListResult;
    }

    /**
     * @return ArrayOfItemWarehouseSummary
     */
    public function getGetItemWarehouseListResult()
    {
      return $this->GetItemWarehouseListResult;
    }

    /**
     * @param ArrayOfItemWarehouseSummary $GetItemWarehouseListResult
     * @return GetItemWarehouseListResponse
     */
    public function setGetItemWarehouseListResult($GetItemWarehouseListResult)
    {
      $this->GetItemWarehouseListResult = $GetItemWarehouseListResult;
      return $this;
    }

}
