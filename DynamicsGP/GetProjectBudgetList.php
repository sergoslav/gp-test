<?php

class GetProjectBudgetList
{

    /**
     * @var ProjectBudgetCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param ProjectBudgetCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return ProjectBudgetCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param ProjectBudgetCriteria $criteria
     * @return GetProjectBudgetList
     */
    public function setCriteria($criteria)
    {
      $this->criteria = $criteria;
      return $this;
    }

    /**
     * @return Context
     */
    public function getContext()
    {
      return $this->context;
    }

    /**
     * @param Context $context
     * @return GetProjectBudgetList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
