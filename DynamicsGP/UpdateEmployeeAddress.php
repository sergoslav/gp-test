<?php

class UpdateEmployeeAddress
{

    /**
     * @var EmployeeAddress $employee
     */
    protected $employee = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @var Policy $policy
     */
    protected $policy = null;

    /**
     * @param EmployeeAddress $employee
     * @param Context $context
     * @param Policy $policy
     */
    public function __construct($employee, $context, $policy)
    {
      $this->employee = $employee;
      $this->context = $context;
      $this->policy = $policy;
    }

    /**
     * @return EmployeeAddress
     */
    public function getEmployee()
    {
      return $this->employee;
    }

    /**
     * @param EmployeeAddress $employee
     * @return UpdateEmployeeAddress
     */
    public function setEmployee($employee)
    {
      $this->employee = $employee;
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
     * @return UpdateEmployeeAddress
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

    /**
     * @return Policy
     */
    public function getPolicy()
    {
      return $this->policy;
    }

    /**
     * @param Policy $policy
     * @return UpdateEmployeeAddress
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
    }

}
