<?php

class GetProjectEmployeeExpenseByKeyResponse
{

    /**
     * @var ProjectEmployeeExpense $GetProjectEmployeeExpenseByKeyResult
     */
    protected $GetProjectEmployeeExpenseByKeyResult = null;

    /**
     * @param ProjectEmployeeExpense $GetProjectEmployeeExpenseByKeyResult
     */
    public function __construct($GetProjectEmployeeExpenseByKeyResult)
    {
      $this->GetProjectEmployeeExpenseByKeyResult = $GetProjectEmployeeExpenseByKeyResult;
    }

    /**
     * @return ProjectEmployeeExpense
     */
    public function getGetProjectEmployeeExpenseByKeyResult()
    {
      return $this->GetProjectEmployeeExpenseByKeyResult;
    }

    /**
     * @param ProjectEmployeeExpense $GetProjectEmployeeExpenseByKeyResult
     * @return GetProjectEmployeeExpenseByKeyResponse
     */
    public function setGetProjectEmployeeExpenseByKeyResult($GetProjectEmployeeExpenseByKeyResult)
    {
      $this->GetProjectEmployeeExpenseByKeyResult = $GetProjectEmployeeExpenseByKeyResult;
      return $this;
    }

}
