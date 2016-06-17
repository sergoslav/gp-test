<?php

class CreatePayablesInvoice
{

    /**
     * @var PayablesInvoice $payablesInvoice
     */
    protected $payablesInvoice = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @var Policy $policy
     */
    protected $policy = null;

    /**
     * @param PayablesInvoice $payablesInvoice
     * @param Context $context
     * @param Policy $policy
     */
    public function __construct($payablesInvoice, $context, $policy)
    {
      $this->payablesInvoice = $payablesInvoice;
      $this->context = $context;
      $this->policy = $policy;
    }

    /**
     * @return PayablesInvoice
     */
    public function getPayablesInvoice()
    {
      return $this->payablesInvoice;
    }

    /**
     * @param PayablesInvoice $payablesInvoice
     * @return CreatePayablesInvoice
     */
    public function setPayablesInvoice($payablesInvoice)
    {
      $this->payablesInvoice = $payablesInvoice;
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
     * @return CreatePayablesInvoice
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
     * @return CreatePayablesInvoice
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
    }

}
