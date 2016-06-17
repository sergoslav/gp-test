<?php

class GetVendorManufacturingOrderByKeyResponse
{

    /**
     * @var VendorManufacturingOrder $GetVendorManufacturingOrderByKeyResult
     */
    protected $GetVendorManufacturingOrderByKeyResult = null;

    /**
     * @param VendorManufacturingOrder $GetVendorManufacturingOrderByKeyResult
     */
    public function __construct($GetVendorManufacturingOrderByKeyResult)
    {
      $this->GetVendorManufacturingOrderByKeyResult = $GetVendorManufacturingOrderByKeyResult;
    }

    /**
     * @return VendorManufacturingOrder
     */
    public function getGetVendorManufacturingOrderByKeyResult()
    {
      return $this->GetVendorManufacturingOrderByKeyResult;
    }

    /**
     * @param VendorManufacturingOrder $GetVendorManufacturingOrderByKeyResult
     * @return GetVendorManufacturingOrderByKeyResponse
     */
    public function setGetVendorManufacturingOrderByKeyResult($GetVendorManufacturingOrderByKeyResult)
    {
      $this->GetVendorManufacturingOrderByKeyResult = $GetVendorManufacturingOrderByKeyResult;
      return $this;
    }

}
