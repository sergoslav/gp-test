<?php

class GetEmployeeByKeyResponse
{

    /**
     * @var Employee $GetEmployeeByKeyResult
     */
    protected $GetEmployeeByKeyResult = null;

    /**
     * @param Employee $GetEmployeeByKeyResult
     */
    public function __construct($GetEmployeeByKeyResult)
    {
      $this->GetEmployeeByKeyResult = $GetEmployeeByKeyResult;
    }

    /**
     * @return Employee
     */
    public function getGetEmployeeByKeyResult()
    {
      return $this->GetEmployeeByKeyResult;
    }

    /**
     * @param Employee $GetEmployeeByKeyResult
     * @return GetEmployeeByKeyResponse
     */
    public function setGetEmployeeByKeyResult($GetEmployeeByKeyResult)
    {
      $this->GetEmployeeByKeyResult = $GetEmployeeByKeyResult;
      return $this;
    }

}
