<?php

class GetManufacturingOrderListResponse
{

    /**
     * @var ArrayOfManufacturingOrderSummary $GetManufacturingOrderListResult
     */
    protected $GetManufacturingOrderListResult = null;

    /**
     * @param ArrayOfManufacturingOrderSummary $GetManufacturingOrderListResult
     */
    public function __construct($GetManufacturingOrderListResult)
    {
      $this->GetManufacturingOrderListResult = $GetManufacturingOrderListResult;
    }

    /**
     * @return ArrayOfManufacturingOrderSummary
     */
    public function getGetManufacturingOrderListResult()
    {
      return $this->GetManufacturingOrderListResult;
    }

    /**
     * @param ArrayOfManufacturingOrderSummary $GetManufacturingOrderListResult
     * @return GetManufacturingOrderListResponse
     */
    public function setGetManufacturingOrderListResult($GetManufacturingOrderListResult)
    {
      $this->GetManufacturingOrderListResult = $GetManufacturingOrderListResult;
      return $this;
    }

}
