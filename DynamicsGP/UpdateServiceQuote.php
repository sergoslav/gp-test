<?php

class UpdateServiceQuote
{

    /**
     * @var ServiceQuote $serviceQuote
     */
    protected $serviceQuote = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @var Policy $policy
     */
    protected $policy = null;

    /**
     * @param ServiceQuote $serviceQuote
     * @param Context $context
     * @param Policy $policy
     */
    public function __construct($serviceQuote, $context, $policy)
    {
      $this->serviceQuote = $serviceQuote;
      $this->context = $context;
      $this->policy = $policy;
    }

    /**
     * @return ServiceQuote
     */
    public function getServiceQuote()
    {
      return $this->serviceQuote;
    }

    /**
     * @param ServiceQuote $serviceQuote
     * @return UpdateServiceQuote
     */
    public function setServiceQuote($serviceQuote)
    {
      $this->serviceQuote = $serviceQuote;
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
     * @return UpdateServiceQuote
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
     * @return UpdateServiceQuote
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
    }

}
