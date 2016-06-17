<?php

class GetItemVendorListResponse
{

    /**
     * @var ArrayOfItemVendorSummary $GetItemVendorListResult
     */
    protected $GetItemVendorListResult = null;

    /**
     * @param ArrayOfItemVendorSummary $GetItemVendorListResult
     */
    public function __construct($GetItemVendorListResult)
    {
      $this->GetItemVendorListResult = $GetItemVendorListResult;
    }

    /**
     * @return ArrayOfItemVendorSummary
     */
    public function getGetItemVendorListResult()
    {
      return $this->GetItemVendorListResult;
    }

    /**
     * @param ArrayOfItemVendorSummary $GetItemVendorListResult
     * @return GetItemVendorListResponse
     */
    public function setGetItemVendorListResult($GetItemVendorListResult)
    {
      $this->GetItemVendorListResult = $GetItemVendorListResult;
      return $this;
    }

}
