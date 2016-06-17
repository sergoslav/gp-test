<?php

class GetEmployeePayCodeByKeyResponse
{

    /**
     * @var EmployeePayCode $GetEmployeePayCodeByKeyResult
     */
    protected $GetEmployeePayCodeByKeyResult = null;

    /**
     * @param EmployeePayCode $GetEmployeePayCodeByKeyResult
     */
    public function __construct($GetEmployeePayCodeByKeyResult)
    {
      $this->GetEmployeePayCodeByKeyResult = $GetEmployeePayCodeByKeyResult;
    }

    /**
     * @return EmployeePayCode
     */
    public function getGetEmployeePayCodeByKeyResult()
    {
      return $this->GetEmployeePayCodeByKeyResult;
    }

    /**
     * @param EmployeePayCode $GetEmployeePayCodeByKeyResult
     * @return GetEmployeePayCodeByKeyResponse
     */
    public function setGetEmployeePayCodeByKeyResult($GetEmployeePayCodeByKeyResult)
    {
      $this->GetEmployeePayCodeByKeyResult = $GetEmployeePayCodeByKeyResult;
      return $this;
    }

}
