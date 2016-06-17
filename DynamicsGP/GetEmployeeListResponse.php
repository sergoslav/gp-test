<?php

class GetEmployeeListResponse
{

    /**
     * @var ArrayOfEmployeeSummary $GetEmployeeListResult
     */
    protected $GetEmployeeListResult = null;

    /**
     * @param ArrayOfEmployeeSummary $GetEmployeeListResult
     */
    public function __construct($GetEmployeeListResult)
    {
      $this->GetEmployeeListResult = $GetEmployeeListResult;
    }

    /**
     * @return ArrayOfEmployeeSummary
     */
    public function getGetEmployeeListResult()
    {
      return $this->GetEmployeeListResult;
    }

    /**
     * @param ArrayOfEmployeeSummary $GetEmployeeListResult
     * @return GetEmployeeListResponse
     */
    public function setGetEmployeeListResult($GetEmployeeListResult)
    {
      $this->GetEmployeeListResult = $GetEmployeeListResult;
      return $this;
    }

}
