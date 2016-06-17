<?php

class GetVendorPlannedOrderListResponse
{

    /**
     * @var ArrayOfVendorPlannedOrderSummary $GetVendorPlannedOrderListResult
     */
    protected $GetVendorPlannedOrderListResult = null;

    /**
     * @param ArrayOfVendorPlannedOrderSummary $GetVendorPlannedOrderListResult
     */
    public function __construct($GetVendorPlannedOrderListResult)
    {
      $this->GetVendorPlannedOrderListResult = $GetVendorPlannedOrderListResult;
    }

    /**
     * @return ArrayOfVendorPlannedOrderSummary
     */
    public function getGetVendorPlannedOrderListResult()
    {
      return $this->GetVendorPlannedOrderListResult;
    }

    /**
     * @param ArrayOfVendorPlannedOrderSummary $GetVendorPlannedOrderListResult
     * @return GetVendorPlannedOrderListResponse
     */
    public function setGetVendorPlannedOrderListResult($GetVendorPlannedOrderListResult)
    {
      $this->GetVendorPlannedOrderListResult = $GetVendorPlannedOrderListResult;
      return $this;
    }

}
