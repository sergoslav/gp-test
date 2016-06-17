<?php

class CreateGLUnitAccount
{

    /**
     * @var GLUnitAccount $unitAccount
     */
    protected $unitAccount = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @var Policy $policy
     */
    protected $policy = null;

    /**
     * @param GLUnitAccount $unitAccount
     * @param Context $context
     * @param Policy $policy
     */
    public function __construct($unitAccount, $context, $policy)
    {
      $this->unitAccount = $unitAccount;
      $this->context = $context;
      $this->policy = $policy;
    }

    /**
     * @return GLUnitAccount
     */
    public function getUnitAccount()
    {
      return $this->unitAccount;
    }

    /**
     * @param GLUnitAccount $unitAccount
     * @return CreateGLUnitAccount
     */
    public function setUnitAccount($unitAccount)
    {
      $this->unitAccount = $unitAccount;
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
     * @return CreateGLUnitAccount
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
     * @return CreateGLUnitAccount
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
    }

}
