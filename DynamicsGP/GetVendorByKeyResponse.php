<?php

class GetVendorByKeyResponse
{

    /**
     * @var Vendor $GetVendorByKeyResult
     */
    protected $GetVendorByKeyResult = null;

    /**
     * @param Vendor $GetVendorByKeyResult
     */
    public function __construct($GetVendorByKeyResult)
    {
      $this->GetVendorByKeyResult = $GetVendorByKeyResult;
    }

    /**
     * @return Vendor
     */
    public function getGetVendorByKeyResult()
    {
      return $this->GetVendorByKeyResult;
    }

    /**
     * @param Vendor $GetVendorByKeyResult
     * @return GetVendorByKeyResponse
     */
    public function setGetVendorByKeyResult($GetVendorByKeyResult)
    {
      $this->GetVendorByKeyResult = $GetVendorByKeyResult;
      return $this;
    }

}
