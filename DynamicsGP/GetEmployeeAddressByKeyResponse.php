<?php

class GetEmployeeAddressByKeyResponse
{

    /**
     * @var EmployeeAddress $GetEmployeeAddressByKeyResult
     */
    protected $GetEmployeeAddressByKeyResult = null;

    /**
     * @param EmployeeAddress $GetEmployeeAddressByKeyResult
     */
    public function __construct($GetEmployeeAddressByKeyResult)
    {
      $this->GetEmployeeAddressByKeyResult = $GetEmployeeAddressByKeyResult;
    }

    /**
     * @return EmployeeAddress
     */
    public function getGetEmployeeAddressByKeyResult()
    {
      return $this->GetEmployeeAddressByKeyResult;
    }

    /**
     * @param EmployeeAddress $GetEmployeeAddressByKeyResult
     * @return GetEmployeeAddressByKeyResponse
     */
    public function setGetEmployeeAddressByKeyResult($GetEmployeeAddressByKeyResult)
    {
      $this->GetEmployeeAddressByKeyResult = $GetEmployeeAddressByKeyResult;
      return $this;
    }

}
