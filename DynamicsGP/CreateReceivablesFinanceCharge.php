<?php

class CreateReceivablesFinanceCharge
{

    /**
     * @var ReceivablesFinanceCharge $receivablesFinanceCharge
     */
    protected $receivablesFinanceCharge = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @var Policy $policy
     */
    protected $policy = null;

    /**
     * @param ReceivablesFinanceCharge $receivablesFinanceCharge
     * @param Context $context
     * @param Policy $policy
     */
    public function __construct($receivablesFinanceCharge, $context, $policy)
    {
      $this->receivablesFinanceCharge = $receivablesFinanceCharge;
      $this->context = $context;
      $this->policy = $policy;
    }

    /**
     * @return ReceivablesFinanceCharge
     */
    public function getReceivablesFinanceCharge()
    {
      return $this->receivablesFinanceCharge;
    }

    /**
     * @param ReceivablesFinanceCharge $receivablesFinanceCharge
     * @return CreateReceivablesFinanceCharge
     */
    public function setReceivablesFinanceCharge($receivablesFinanceCharge)
    {
      $this->receivablesFinanceCharge = $receivablesFinanceCharge;
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
     * @return CreateReceivablesFinanceCharge
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
     * @return CreateReceivablesFinanceCharge
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
    }

}
