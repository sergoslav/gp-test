<?php

class GetProjectBudgetByKeyResponse
{

    /**
     * @var ProjectBudget $GetProjectBudgetByKeyResult
     */
    protected $GetProjectBudgetByKeyResult = null;

    /**
     * @param ProjectBudget $GetProjectBudgetByKeyResult
     */
    public function __construct($GetProjectBudgetByKeyResult)
    {
      $this->GetProjectBudgetByKeyResult = $GetProjectBudgetByKeyResult;
    }

    /**
     * @return ProjectBudget
     */
    public function getGetProjectBudgetByKeyResult()
    {
      return $this->GetProjectBudgetByKeyResult;
    }

    /**
     * @param ProjectBudget $GetProjectBudgetByKeyResult
     * @return GetProjectBudgetByKeyResponse
     */
    public function setGetProjectBudgetByKeyResult($GetProjectBudgetByKeyResult)
    {
      $this->GetProjectBudgetByKeyResult = $GetProjectBudgetByKeyResult;
      return $this;
    }

}
