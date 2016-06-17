<?php

class CreateEmployeePayCode
{

    /**
     * @var EmployeePayCode $employeePayCode
     */
    protected $employeePayCode = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @var Policy $policy
     */
    protected $policy = null;

    /**
     * @param EmployeePayCode $employeePayCode
     * @param Context $context
     * @param Policy $policy
     */
    public function __construct($employeePayCode, $context, $policy)
    {
      $this->employeePayCode = $employeePayCode;
      $this->context = $context;
      $this->policy = $policy;
    }

    /**
     * @return EmployeePayCode
     */
    public function getEmployeePayCode()
    {
      return $this->employeePayCode;
    }

    /**
     * @param EmployeePayCode $employeePayCode
     * @return CreateEmployeePayCode
     */
    public function setEmployeePayCode($employeePayCode)
    {
      $this->employeePayCode = $employeePayCode;
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
     * @return CreateEmployeePayCode
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
     * @return CreateEmployeePayCode
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
    }

}
