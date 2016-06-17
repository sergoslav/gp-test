<?php

class CreateReceivablesInvoice
{

    /**
     * @var ReceivablesInvoice $receivablesInvoice
     */
    protected $receivablesInvoice = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @var Policy $policy
     */
    protected $policy = null;

    /**
     * @param ReceivablesInvoice $receivablesInvoice
     * @param Context $context
     * @param Policy $policy
     */
    public function __construct($receivablesInvoice, $context, $policy)
    {
      $this->receivablesInvoice = $receivablesInvoice;
      $this->context = $context;
      $this->policy = $policy;
    }

    /**
     * @return ReceivablesInvoice
     */
    public function getReceivablesInvoice()
    {
      return $this->receivablesInvoice;
    }

    /**
     * @param ReceivablesInvoice $receivablesInvoice
     * @return CreateReceivablesInvoice
     */
    public function setReceivablesInvoice($receivablesInvoice)
    {
      $this->receivablesInvoice = $receivablesInvoice;
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
     * @return CreateReceivablesInvoice
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
     * @return CreateReceivablesInvoice
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
    }

}
