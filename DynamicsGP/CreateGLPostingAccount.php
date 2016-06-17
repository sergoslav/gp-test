<?php

class CreateGLPostingAccount
{

    /**
     * @var GLPostingAccount $postingAccount
     */
    protected $postingAccount = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @var Policy $policy
     */
    protected $policy = null;

    /**
     * @param GLPostingAccount $postingAccount
     * @param Context $context
     * @param Policy $policy
     */
    public function __construct($postingAccount, $context, $policy)
    {
      $this->postingAccount = $postingAccount;
      $this->context = $context;
      $this->policy = $policy;
    }

    /**
     * @return GLPostingAccount
     */
    public function getPostingAccount()
    {
      return $this->postingAccount;
    }

    /**
     * @param GLPostingAccount $postingAccount
     * @return CreateGLPostingAccount
     */
    public function setPostingAccount($postingAccount)
    {
      $this->postingAccount = $postingAccount;
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
     * @return CreateGLPostingAccount
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
     * @return CreateGLPostingAccount
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
    }

}
