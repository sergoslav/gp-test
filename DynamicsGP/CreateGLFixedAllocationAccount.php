<?php

class CreateGLFixedAllocationAccount
{

    /**
     * @var GLFixedAllocationAccount $fixedAllocationAccount
     */
    protected $fixedAllocationAccount = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @var Policy $policy
     */
    protected $policy = null;

    /**
     * @param GLFixedAllocationAccount $fixedAllocationAccount
     * @param Context $context
     * @param Policy $policy
     */
    public function __construct($fixedAllocationAccount, $context, $policy)
    {
      $this->fixedAllocationAccount = $fixedAllocationAccount;
      $this->context = $context;
      $this->policy = $policy;
    }

    /**
     * @return GLFixedAllocationAccount
     */
    public function getFixedAllocationAccount()
    {
      return $this->fixedAllocationAccount;
    }

    /**
     * @param GLFixedAllocationAccount $fixedAllocationAccount
     * @return CreateGLFixedAllocationAccount
     */
    public function setFixedAllocationAccount($fixedAllocationAccount)
    {
      $this->fixedAllocationAccount = $fixedAllocationAccount;
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
     * @return CreateGLFixedAllocationAccount
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
     * @return CreateGLFixedAllocationAccount
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
    }

}
