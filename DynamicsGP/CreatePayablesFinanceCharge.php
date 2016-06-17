<?php

class CreatePayablesFinanceCharge
{

    /**
     * @var PayablesFinanceCharge $payablesFinanceCharge
     */
    protected $payablesFinanceCharge = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @var Policy $policy
     */
    protected $policy = null;

    /**
     * @param PayablesFinanceCharge $payablesFinanceCharge
     * @param Context $context
     * @param Policy $policy
     */
    public function __construct($payablesFinanceCharge, $context, $policy)
    {
      $this->payablesFinanceCharge = $payablesFinanceCharge;
      $this->context = $context;
      $this->policy = $policy;
    }

    /**
     * @return PayablesFinanceCharge
     */
    public function getPayablesFinanceCharge()
    {
      return $this->payablesFinanceCharge;
    }

    /**
     * @param PayablesFinanceCharge $payablesFinanceCharge
     * @return CreatePayablesFinanceCharge
     */
    public function setPayablesFinanceCharge($payablesFinanceCharge)
    {
      $this->payablesFinanceCharge = $payablesFinanceCharge;
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
     * @return CreatePayablesFinanceCharge
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
     * @return CreatePayablesFinanceCharge
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
    }

}
