<?php

class GetEmployeePayCodeList
{

    /**
     * @var EmployeePayCodeCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param EmployeePayCodeCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return EmployeePayCodeCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param EmployeePayCodeCriteria $criteria
     * @return GetEmployeePayCodeList
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
     * @return GetEmployeePayCodeList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
