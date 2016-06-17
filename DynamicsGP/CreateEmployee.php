<?php

class CreateEmployee
{

    /**
     * @var Employee $employee
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
     * @param Employee $employee
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
     * @return Employee
     */
    public function getEmployee()
    {
      return $this->employee;
    }

    /**
     * @param Employee $employee
     * @return CreateEmployee
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
     * @return CreateEmployee
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
     * @return CreateEmployee
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
    }

}
