<?php

class GetCustomerByKeyResponse
{

    /**
     * @var Customer $GetCustomerByKeyResult
     */
    protected $GetCustomerByKeyResult = null;

    /**
     * @param Customer $GetCustomerByKeyResult
     */
    public function __construct($GetCustomerByKeyResult)
    {
      $this->GetCustomerByKeyResult = $GetCustomerByKeyResult;
    }

    /**
     * @return Customer
     */
    public function getGetCustomerByKeyResult()
    {
      return $this->GetCustomerByKeyResult;
    }

    /**
     * @param Customer $GetCustomerByKeyResult
     * @return GetCustomerByKeyResponse
     */
    public function setGetCustomerByKeyResult($GetCustomerByKeyResult)
    {
      $this->GetCustomerByKeyResult = $GetCustomerByKeyResult;
      return $this;
    }

}
