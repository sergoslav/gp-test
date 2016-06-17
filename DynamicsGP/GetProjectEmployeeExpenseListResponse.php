<?php

class GetProjectEmployeeExpenseListResponse
{

    /**
     * @var ArrayOfProjectEmployeeExpenseSummary $GetProjectEmployeeExpenseListResult
     */
    protected $GetProjectEmployeeExpenseListResult = null;

    /**
     * @param ArrayOfProjectEmployeeExpenseSummary $GetProjectEmployeeExpenseListResult
     */
    public function __construct($GetProjectEmployeeExpenseListResult)
    {
      $this->GetProjectEmployeeExpenseListResult = $GetProjectEmployeeExpenseListResult;
    }

    /**
     * @return ArrayOfProjectEmployeeExpenseSummary
     */
    public function getGetProjectEmployeeExpenseListResult()
    {
      return $this->GetProjectEmployeeExpenseListResult;
    }

    /**
     * @param ArrayOfProjectEmployeeExpenseSummary $GetProjectEmployeeExpenseListResult
     * @return GetProjectEmployeeExpenseListResponse
     */
    public function setGetProjectEmployeeExpenseListResult($GetProjectEmployeeExpenseListResult)
    {
      $this->GetProjectEmployeeExpenseListResult = $GetProjectEmployeeExpenseListResult;
      return $this;
    }

}
