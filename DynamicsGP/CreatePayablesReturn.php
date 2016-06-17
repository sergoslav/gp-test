<?php

class CreatePayablesReturn
{

    /**
     * @var PayablesReturn $payablesReturn
     */
    protected $payablesReturn = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @var Policy $policy
     */
    protected $policy = null;

    /**
     * @param PayablesReturn $payablesReturn
     * @param Context $context
     * @param Policy $policy
     */
    public function __construct($payablesReturn, $context, $policy)
    {
      $this->payablesReturn = $payablesReturn;
      $this->context = $context;
      $this->policy = $policy;
    }

    /**
     * @return PayablesReturn
     */
    public function getPayablesReturn()
    {
      return $this->payablesReturn;
    }

    /**
     * @param PayablesReturn $payablesReturn
     * @return CreatePayablesReturn
     */
    public function setPayablesReturn($payablesReturn)
    {
      $this->payablesReturn = $payablesReturn;
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
     * @return CreatePayablesReturn
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
     * @return CreatePayablesReturn
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
    }

}
