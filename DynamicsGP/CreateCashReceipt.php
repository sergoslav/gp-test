<?php

class CreateCashReceipt
{

    /**
     * @var CashReceipt $cashReceipt
     */
    protected $cashReceipt = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @var Policy $policy
     */
    protected $policy = null;

    /**
     * @param CashReceipt $cashReceipt
     * @param Context $context
     * @param Policy $policy
     */
    public function __construct($cashReceipt, $context, $policy)
    {
      $this->cashReceipt = $cashReceipt;
      $this->context = $context;
      $this->policy = $policy;
    }

    /**
     * @return CashReceipt
     */
    public function getCashReceipt()
    {
      return $this->cashReceipt;
    }

    /**
     * @param CashReceipt $cashReceipt
     * @return CreateCashReceipt
     */
    public function setCashReceipt($cashReceipt)
    {
      $this->cashReceipt = $cashReceipt;
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
     * @return CreateCashReceipt
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
     * @return CreateCashReceipt
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
    }

}
