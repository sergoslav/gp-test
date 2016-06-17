<?php

class GetPlannedOrderListResponse
{

    /**
     * @var ArrayOfPlannedOrderSummary $GetPlannedOrderListResult
     */
    protected $GetPlannedOrderListResult = null;

    /**
     * @param ArrayOfPlannedOrderSummary $GetPlannedOrderListResult
     */
    public function __construct($GetPlannedOrderListResult)
    {
      $this->GetPlannedOrderListResult = $GetPlannedOrderListResult;
    }

    /**
     * @return ArrayOfPlannedOrderSummary
     */
    public function getGetPlannedOrderListResult()
    {
      return $this->GetPlannedOrderListResult;
    }

    /**
     * @param ArrayOfPlannedOrderSummary $GetPlannedOrderListResult
     * @return GetPlannedOrderListResponse
     */
    public function setGetPlannedOrderListResult($GetPlannedOrderListResult)
    {
      $this->GetPlannedOrderListResult = $GetPlannedOrderListResult;
      return $this;
    }

}
