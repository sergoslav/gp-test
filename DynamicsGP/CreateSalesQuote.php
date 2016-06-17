<?php

class CreateSalesQuote
{

    /**
     * @var SalesQuote $salesQuote
     */
    protected $salesQuote = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @var Policy $policy
     */
    protected $policy = null;

    /**
     * @param SalesQuote $salesQuote
     * @param Context $context
     * @param Policy $policy
     */
    public function __construct($salesQuote, $context, $policy)
    {
      $this->salesQuote = $salesQuote;
      $this->context = $context;
      $this->policy = $policy;
    }

    /**
     * @return SalesQuote
     */
    public function getSalesQuote()
    {
      return $this->salesQuote;
    }

    /**
     * @param SalesQuote $salesQuote
     * @return CreateSalesQuote
     */
    public function setSalesQuote($salesQuote)
    {
      $this->salesQuote = $salesQuote;
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
     * @return CreateSalesQuote
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
     * @return CreateSalesQuote
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
    }

}
