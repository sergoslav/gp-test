<?php

class GetPlannedOrderByKeyResponse
{

    /**
     * @var PlannedOrder $GetPlannedOrderByKeyResult
     */
    protected $GetPlannedOrderByKeyResult = null;

    /**
     * @param PlannedOrder $GetPlannedOrderByKeyResult
     */
    public function __construct($GetPlannedOrderByKeyResult)
    {
      $this->GetPlannedOrderByKeyResult = $GetPlannedOrderByKeyResult;
    }

    /**
     * @return PlannedOrder
     */
    public function getGetPlannedOrderByKeyResult()
    {
      return $this->GetPlannedOrderByKeyResult;
    }

    /**
     * @param PlannedOrder $GetPlannedOrderByKeyResult
     * @return GetPlannedOrderByKeyResponse
     */
    public function setGetPlannedOrderByKeyResult($GetPlannedOrderByKeyResult)
    {
      $this->GetPlannedOrderByKeyResult = $GetPlannedOrderByKeyResult;
      return $this;
    }

}
