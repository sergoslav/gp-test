<?php

class CreateFee
{

    /**
     * @var Fee $fee
     */
    protected $fee = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @var Policy $policy
     */
    protected $policy = null;

    /**
     * @param Fee $fee
     * @param Context $context
     * @param Policy $policy
     */
    public function __construct($fee, $context, $policy)
    {
      $this->fee = $fee;
      $this->context = $context;
      $this->policy = $policy;
    }

    /**
     * @return Fee
     */
    public function getFee()
    {
      return $this->fee;
    }

    /**
     * @param Fee $fee
     * @return CreateFee
     */
    public function setFee($fee)
    {
      $this->fee = $fee;
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
     * @return CreateFee
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
     * @return CreateFee
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
    }

}
