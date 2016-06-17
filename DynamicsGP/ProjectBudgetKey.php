<?php

class ProjectBudgetKey extends ReferenceKey
{

    /**
     * @var CostCategoryKey $CostCategoryKey
     */
    protected $CostCategoryKey = null;

    /**
     * @var ProjectKey $ProjectKey
     */
    protected $ProjectKey = null;

    /**
     * @var int $TransactionUsage
     */
    protected $TransactionUsage = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return CostCategoryKey
     */
    public function getCostCategoryKey()
    {
      return $this->CostCategoryKey;
    }

    /**
     * @param CostCategoryKey $CostCategoryKey
     * @return ProjectBudgetKey
     */
    public function setCostCategoryKey($CostCategoryKey)
    {
      $this->CostCategoryKey = $CostCategoryKey;
      return $this;
    }

    /**
     * @return ProjectKey
     */
    public function getProjectKey()
    {
      return $this->ProjectKey;
    }

    /**
     * @param ProjectKey $ProjectKey
     * @return ProjectBudgetKey
     */
    public function setProjectKey($ProjectKey)
    {
      $this->ProjectKey = $ProjectKey;
      return $this;
    }

    /**
     * @return int
     */
    public function getTransactionUsage()
    {
      return $this->TransactionUsage;
    }

    /**
     * @param int $TransactionUsage
     * @return ProjectBudgetKey
     */
    public function setTransactionUsage($TransactionUsage)
    {
      $this->TransactionUsage = $TransactionUsage;
      return $this;
    }

}
