<?php

class CreateGLTransaction
{

    /**
     * @var GLTransaction $glTransaction
     */
    protected $glTransaction = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @var Policy $policy
     */
    protected $policy = null;

    /**
     * @param GLTransaction $glTransaction
     * @param Context $context
     * @param Policy $policy
     */
    public function __construct($glTransaction, $context, $policy)
    {
      $this->glTransaction = $glTransaction;
      $this->context = $context;
      $this->policy = $policy;
    }

    /**
     * @return GLTransaction
     */
    public function getGlTransaction()
    {
      return $this->glTransaction;
    }

    /**
     * @param GLTransaction $glTransaction
     * @return CreateGLTransaction
     */
    public function setGlTransaction($glTransaction)
    {
      $this->glTransaction = $glTransaction;
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
     * @return CreateGLTransaction
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
     * @return CreateGLTransaction
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
    }

}
