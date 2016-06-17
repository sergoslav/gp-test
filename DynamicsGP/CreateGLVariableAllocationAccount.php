<?php

class CreateGLVariableAllocationAccount
{

    /**
     * @var GLVariableAllocationAccount $variableAllocationAccount
     */
    protected $variableAllocationAccount = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @var Policy $policy
     */
    protected $policy = null;

    /**
     * @param GLVariableAllocationAccount $variableAllocationAccount
     * @param Context $context
     * @param Policy $policy
     */
    public function __construct($variableAllocationAccount, $context, $policy)
    {
      $this->variableAllocationAccount = $variableAllocationAccount;
      $this->context = $context;
      $this->policy = $policy;
    }

    /**
     * @return GLVariableAllocationAccount
     */
    public function getVariableAllocationAccount()
    {
      return $this->variableAllocationAccount;
    }

    /**
     * @param GLVariableAllocationAccount $variableAllocationAccount
     * @return CreateGLVariableAllocationAccount
     */
    public function setVariableAllocationAccount($variableAllocationAccount)
    {
      $this->variableAllocationAccount = $variableAllocationAccount;
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
     * @return CreateGLVariableAllocationAccount
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
     * @return CreateGLVariableAllocationAccount
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
    }

}
