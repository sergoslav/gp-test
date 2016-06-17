<?php

class GetVendorManufacturingOrderListResponse
{

    /**
     * @var ArrayOfVendorManufacturingOrderSummary $GetVendorManufacturingOrderListResult
     */
    protected $GetVendorManufacturingOrderListResult = null;

    /**
     * @param ArrayOfVendorManufacturingOrderSummary $GetVendorManufacturingOrderListResult
     */
    public function __construct($GetVendorManufacturingOrderListResult)
    {
      $this->GetVendorManufacturingOrderListResult = $GetVendorManufacturingOrderListResult;
    }

    /**
     * @return ArrayOfVendorManufacturingOrderSummary
     */
    public function getGetVendorManufacturingOrderListResult()
    {
      return $this->GetVendorManufacturingOrderListResult;
    }

    /**
     * @param ArrayOfVendorManufacturingOrderSummary $GetVendorManufacturingOrderListResult
     * @return GetVendorManufacturingOrderListResponse
     */
    public function setGetVendorManufacturingOrderListResult($GetVendorManufacturingOrderListResult)
    {
      $this->GetVendorManufacturingOrderListResult = $GetVendorManufacturingOrderListResult;
      return $this;
    }

}
