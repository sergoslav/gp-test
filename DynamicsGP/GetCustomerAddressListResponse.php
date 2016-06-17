<?php

class GetCustomerAddressListResponse
{

    /**
     * @var ArrayOfCustomerAddressSummary $GetCustomerAddressListResult
     */
    protected $GetCustomerAddressListResult = null;

    /**
     * @param ArrayOfCustomerAddressSummary $GetCustomerAddressListResult
     */
    public function __construct($GetCustomerAddressListResult)
    {
      $this->GetCustomerAddressListResult = $GetCustomerAddressListResult;
    }

    /**
     * @return ArrayOfCustomerAddressSummary
     */
    public function getGetCustomerAddressListResult()
    {
      return $this->GetCustomerAddressListResult;
    }

    /**
     * @param ArrayOfCustomerAddressSummary $GetCustomerAddressListResult
     * @return GetCustomerAddressListResponse
     */
    public function setGetCustomerAddressListResult($GetCustomerAddressListResult)
    {
      $this->GetCustomerAddressListResult = $GetCustomerAddressListResult;
      return $this;
    }

}
