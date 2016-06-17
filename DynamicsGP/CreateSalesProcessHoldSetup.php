<?php

class CreateSalesProcessHoldSetup
{

    /**
     * @var SalesProcessHoldSetup $salesProcessHoldSetup
     */
    protected $salesProcessHoldSetup = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @var Policy $policy
     */
    protected $policy = null;

    /**
     * @param SalesProcessHoldSetup $salesProcessHoldSetup
     * @param Context $context
     * @param Policy $policy
     */
    public function __construct($salesProcessHoldSetup, $context, $policy)
    {
      $this->salesProcessHoldSetup = $salesProcessHoldSetup;
      $this->context = $context;
      $this->policy = $policy;
    }

    /**
     * @return SalesProcessHoldSetup
     */
    public function getSalesProcessHoldSetup()
    {
      return $this->salesProcessHoldSetup;
    }

    /**
     * @param SalesProcessHoldSetup $salesProcessHoldSetup
     * @return CreateSalesProcessHoldSetup
     */
    public function setSalesProcessHoldSetup($salesProcessHoldSetup)
    {
      $this->salesProcessHoldSetup = $salesProcessHoldSetup;
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
     * @return CreateSalesProcessHoldSetup
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
     * @return CreateSalesProcessHoldSetup
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
    }

}
