<?php

class GetEmployeeList
{

    /**
     * @var EmployeeCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param EmployeeCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return EmployeeCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param EmployeeCriteria $criteria
     * @return GetEmployeeList
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
     * @return GetEmployeeList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
