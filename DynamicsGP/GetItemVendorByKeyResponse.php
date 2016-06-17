<?php

class GetItemVendorByKeyResponse
{

    /**
     * @var ItemVendor $GetItemVendorByKeyResult
     */
    protected $GetItemVendorByKeyResult = null;

    /**
     * @param ItemVendor $GetItemVendorByKeyResult
     */
    public function __construct($GetItemVendorByKeyResult)
    {
      $this->GetItemVendorByKeyResult = $GetItemVendorByKeyResult;
    }

    /**
     * @return ItemVendor
     */
    public function getGetItemVendorByKeyResult()
    {
      return $this->GetItemVendorByKeyResult;
    }

    /**
     * @param ItemVendor $GetItemVendorByKeyResult
     * @return GetItemVendorByKeyResponse
     */
    public function setGetItemVendorByKeyResult($GetItemVendorByKeyResult)
    {
      $this->GetItemVendorByKeyResult = $GetItemVendorByKeyResult;
      return $this;
    }

}
