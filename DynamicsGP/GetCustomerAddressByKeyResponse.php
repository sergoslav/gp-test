<?php

class GetCustomerAddressByKeyResponse
{

    /**
     * @var CustomerAddress $GetCustomerAddressByKeyResult
     */
    protected $GetCustomerAddressByKeyResult = null;

    /**
     * @param CustomerAddress $GetCustomerAddressByKeyResult
     */
    public function __construct($GetCustomerAddressByKeyResult)
    {
      $this->GetCustomerAddressByKeyResult = $GetCustomerAddressByKeyResult;
    }

    /**
     * @return CustomerAddress
     */
    public function getGetCustomerAddressByKeyResult()
    {
      return $this->GetCustomerAddressByKeyResult;
    }

    /**
     * @param CustomerAddress $GetCustomerAddressByKeyResult
     * @return GetCustomerAddressByKeyResponse
     */
    public function setGetCustomerAddressByKeyResult($GetCustomerAddressByKeyResult)
    {
      $this->GetCustomerAddressByKeyResult = $GetCustomerAddressByKeyResult;
      return $this;
    }

}
