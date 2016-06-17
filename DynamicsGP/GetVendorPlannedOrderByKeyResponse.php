<?php

class GetVendorPlannedOrderByKeyResponse
{

    /**
     * @var VendorPlannedOrder $GetVendorPlannedOrderByKeyResult
     */
    protected $GetVendorPlannedOrderByKeyResult = null;

    /**
     * @param VendorPlannedOrder $GetVendorPlannedOrderByKeyResult
     */
    public function __construct($GetVendorPlannedOrderByKeyResult)
    {
      $this->GetVendorPlannedOrderByKeyResult = $GetVendorPlannedOrderByKeyResult;
    }

    /**
     * @return VendorPlannedOrder
     */
    public function getGetVendorPlannedOrderByKeyResult()
    {
      return $this->GetVendorPlannedOrderByKeyResult;
    }

    /**
     * @param VendorPlannedOrder $GetVendorPlannedOrderByKeyResult
     * @return GetVendorPlannedOrderByKeyResponse
     */
    public function setGetVendorPlannedOrderByKeyResult($GetVendorPlannedOrderByKeyResult)
    {
      $this->GetVendorPlannedOrderByKeyResult = $GetVendorPlannedOrderByKeyResult;
      return $this;
    }

}
