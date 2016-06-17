<?php

class ProjectBudgetCriteria extends Criteria
{

    /**
     * @var LikeRestrictionOfstring $CostCategoryId
     */
    protected $CostCategoryId = null;

    /**
     * @var LikeRestrictionOfstring $ProjectId
     */
    protected $ProjectId = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getCostCategoryId()
    {
      return $this->CostCategoryId;
    }

    /**
     * @param LikeRestrictionOfstring $CostCategoryId
     * @return ProjectBudgetCriteria
     */
    public function setCostCategoryId($CostCategoryId)
    {
      $this->CostCategoryId = $CostCategoryId;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getProjectId()
    {
      return $this->ProjectId;
    }

    /**
     * @param LikeRestrictionOfstring $ProjectId
     * @return ProjectBudgetCriteria
     */
    public function setProjectId($ProjectId)
    {
      $this->ProjectId = $ProjectId;
      return $this;
    }

}
