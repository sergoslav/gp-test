<?php

class GetVendorListResponse
{

    /**
     * @var ArrayOfVendorSummary $GetVendorListResult
     */
    protected $GetVendorListResult = null;

    /**
     * @param ArrayOfVendorSummary $GetVendorListResult
     */
    public function __construct($GetVendorListResult)
    {
      $this->GetVendorListResult = $GetVendorListResult;
    }

    /**
     * @return ArrayOfVendorSummary
     */
    public function getGetVendorListResult()
    {
      return $this->GetVendorListResult;
    }

    /**
     * @param ArrayOfVendorSummary $GetVendorListResult
     * @return GetVendorListResponse
     */
    public function setGetVendorListResult($GetVendorListResult)
    {
      $this->GetVendorListResult = $GetVendorListResult;
      return $this;
    }

}
