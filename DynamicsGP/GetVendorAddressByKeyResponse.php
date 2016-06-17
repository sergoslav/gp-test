<?php

class GetVendorAddressByKeyResponse
{

    /**
     * @var VendorAddress $GetVendorAddressByKeyResult
     */
    protected $GetVendorAddressByKeyResult = null;

    /**
     * @param VendorAddress $GetVendorAddressByKeyResult
     */
    public function __construct($GetVendorAddressByKeyResult)
    {
      $this->GetVendorAddressByKeyResult = $GetVendorAddressByKeyResult;
    }

    /**
     * @return VendorAddress
     */
    public function getGetVendorAddressByKeyResult()
    {
      return $this->GetVendorAddressByKeyResult;
    }

    /**
     * @param VendorAddress $GetVendorAddressByKeyResult
     * @return GetVendorAddressByKeyResponse
     */
    public function setGetVendorAddressByKeyResult($GetVendorAddressByKeyResult)
    {
      $this->GetVendorAddressByKeyResult = $GetVendorAddressByKeyResult;
      return $this;
    }

}
