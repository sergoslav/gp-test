<?php

class GetProjectEmployeeExpenseList
{

    /**
     * @var ProjectEmployeeExpenseCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param ProjectEmployeeExpenseCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return ProjectEmployeeExpenseCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param ProjectEmployeeExpenseCriteria $criteria
     * @return GetProjectEmployeeExpenseList
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
     * @return GetProjectEmployeeExpenseList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
