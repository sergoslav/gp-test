<?php

class GetEmployeeAddressListResponse
{

    /**
     * @var ArrayOfEmployeeAddressSummary $GetEmployeeAddressListResult
     */
    protected $GetEmployeeAddressListResult = null;

    /**
     * @param ArrayOfEmployeeAddressSummary $GetEmployeeAddressListResult
     */
    public function __construct($GetEmployeeAddressListResult)
    {
      $this->GetEmployeeAddressListResult = $GetEmployeeAddressListResult;
    }

    /**
     * @return ArrayOfEmployeeAddressSummary
     */
    public function getGetEmployeeAddressListResult()
    {
      return $this->GetEmployeeAddressListResult;
    }

    /**
     * @param ArrayOfEmployeeAddressSummary $GetEmployeeAddressListResult
     * @return GetEmployeeAddressListResponse
     */
    public function setGetEmployeeAddressListResult($GetEmployeeAddressListResult)
    {
      $this->GetEmployeeAddressListResult = $GetEmployeeAddressListResult;
      return $this;
    }

}
