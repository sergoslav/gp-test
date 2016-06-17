<?php

class GetVendorAddressListResponse
{

    /**
     * @var ArrayOfVendorAddressSummary $GetVendorAddressListResult
     */
    protected $GetVendorAddressListResult = null;

    /**
     * @param ArrayOfVendorAddressSummary $GetVendorAddressListResult
     */
    public function __construct($GetVendorAddressListResult)
    {
      $this->GetVendorAddressListResult = $GetVendorAddressListResult;
    }

    /**
     * @return ArrayOfVendorAddressSummary
     */
    public function getGetVendorAddressListResult()
    {
      return $this->GetVendorAddressListResult;
    }

    /**
     * @param ArrayOfVendorAddressSummary $GetVendorAddressListResult
     * @return GetVendorAddressListResponse
     */
    public function setGetVendorAddressListResult($GetVendorAddressListResult)
    {
      $this->GetVendorAddressListResult = $GetVendorAddressListResult;
      return $this;
    }

}
