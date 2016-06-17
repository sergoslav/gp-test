<?php

class GetEmployeePayCodeListResponse
{

    /**
     * @var ArrayOfEmployeePayCodeSummary $GetEmployeePayCodeListResult
     */
    protected $GetEmployeePayCodeListResult = null;

    /**
     * @param ArrayOfEmployeePayCodeSummary $GetEmployeePayCodeListResult
     */
    public function __construct($GetEmployeePayCodeListResult)
    {
      $this->GetEmployeePayCodeListResult = $GetEmployeePayCodeListResult;
    }

    /**
     * @return ArrayOfEmployeePayCodeSummary
     */
    public function getGetEmployeePayCodeListResult()
    {
      return $this->GetEmployeePayCodeListResult;
    }

    /**
     * @param ArrayOfEmployeePayCodeSummary $GetEmployeePayCodeListResult
     * @return GetEmployeePayCodeListResponse
     */
    public function setGetEmployeePayCodeListResult($GetEmployeePayCodeListResult)
    {
      $this->GetEmployeePayCodeListResult = $GetEmployeePayCodeListResult;
      return $this;
    }

}
