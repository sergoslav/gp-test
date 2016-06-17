<?php

class CreateBackOfficeRoleAssignment
{

    /**
     * @var BackOfficeRoleAssignment $backOfficeRoleAssignment
     */
    protected $backOfficeRoleAssignment = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @var Policy $policy
     */
    protected $policy = null;

    /**
     * @param BackOfficeRoleAssignment $backOfficeRoleAssignment
     * @param Context $context
     * @param Policy $policy
     */
    public function __construct($backOfficeRoleAssignment, $context, $policy)
    {
      $this->backOfficeRoleAssignment = $backOfficeRoleAssignment;
      $this->context = $context;
      $this->policy = $policy;
    }

    /**
     * @return BackOfficeRoleAssignment
     */
    public function getBackOfficeRoleAssignment()
    {
      return $this->backOfficeRoleAssignment;
    }

    /**
     * @param BackOfficeRoleAssignment $backOfficeRoleAssignment
     * @return CreateBackOfficeRoleAssignment
     */
    public function setBackOfficeRoleAssignment($backOfficeRoleAssignment)
    {
      $this->backOfficeRoleAssignment = $backOfficeRoleAssignment;
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
     * @return CreateBackOfficeRoleAssignment
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
     * @return CreateBackOfficeRoleAssignment
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
    }

}
