<?php

class CreatePricing
{

    /**
     * @var Pricing $pricing
     */
    protected $pricing = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @var Policy $policy
     */
    protected $policy = null;

    /**
     * @param Pricing $pricing
     * @param Context $context
     * @param Policy $policy
     */
    public function __construct($pricing, $context, $policy)
    {
      $this->pricing = $pricing;
      $this->context = $context;
      $this->policy = $policy;
    }

    /**
     * @return Pricing
     */
    public function getPricing()
    {
      return $this->pricing;
    }

    /**
     * @param Pricing $pricing
     * @return CreatePricing
     */
    public function setPricing($pricing)
    {
      $this->pricing = $pricing;
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
     * @return CreatePricing
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
     * @return CreatePricing
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
    }

}
