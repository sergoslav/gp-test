<?php

class CreatePayablesMiscellaneousCharge
{

    /**
     * @var PayablesMiscellaneousCharge $payablesMiscellaneousCharge
     */
    protected $payablesMiscellaneousCharge = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @var Policy $policy
     */
    protected $policy = null;

    /**
     * @param PayablesMiscellaneousCharge $payablesMiscellaneousCharge
     * @param Context $context
     * @param Policy $policy
     */
    public function __construct($payablesMiscellaneousCharge, $context, $policy)
    {
      $this->payablesMiscellaneousCharge = $payablesMiscellaneousCharge;
      $this->context = $context;
      $this->policy = $policy;
    }

    /**
     * @return PayablesMiscellaneousCharge
     */
    public function getPayablesMiscellaneousCharge()
    {
      return $this->payablesMiscellaneousCharge;
    }

    /**
     * @param PayablesMiscellaneousCharge $payablesMiscellaneousCharge
     * @return CreatePayablesMiscellaneousCharge
     */
    public function setPayablesMiscellaneousCharge($payablesMiscellaneousCharge)
    {
      $this->payablesMiscellaneousCharge = $payablesMiscellaneousCharge;
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
     * @return CreatePayablesMiscellaneousCharge
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
     * @return CreatePayablesMiscellaneousCharge
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
    }

}
