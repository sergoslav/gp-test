<?php

class GetEmployeeAddressList
{

    /**
     * @var EmployeeAddressCriteria $criteria
     */
    protected $criteria = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param EmployeeAddressCriteria $criteria
     * @param Context $context
     */
    public function __construct($criteria, $context)
    {
      $this->criteria = $criteria;
      $this->context = $context;
    }

    /**
     * @return EmployeeAddressCriteria
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param EmployeeAddressCriteria $criteria
     * @return GetEmployeeAddressList
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
     * @return GetEmployeeAddressList
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
