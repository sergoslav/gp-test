<?php

class GetProjectBudgetListResponse
{

    /**
     * @var ArrayOfProjectBudgetSummary $GetProjectBudgetListResult
     */
    protected $GetProjectBudgetListResult = null;

    /**
     * @param ArrayOfProjectBudgetSummary $GetProjectBudgetListResult
     */
    public function __construct($GetProjectBudgetListResult)
    {
      $this->GetProjectBudgetListResult = $GetProjectBudgetListResult;
    }

    /**
     * @return ArrayOfProjectBudgetSummary
     */
    public function getGetProjectBudgetListResult()
    {
      return $this->GetProjectBudgetListResult;
    }

    /**
     * @param ArrayOfProjectBudgetSummary $GetProjectBudgetListResult
     * @return GetProjectBudgetListResponse
     */
    public function setGetProjectBudgetListResult($GetProjectBudgetListResult)
    {
      $this->GetProjectBudgetListResult = $GetProjectBudgetListResult;
      return $this;
    }

}
