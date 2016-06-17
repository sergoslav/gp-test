<?php

class CreateReceivablesWarranty
{

    /**
     * @var ReceivablesWarranty $receivablesWarranty
     */
    protected $receivablesWarranty = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @var Policy $policy
     */
    protected $policy = null;

    /**
     * @param ReceivablesWarranty $receivablesWarranty
     * @param Context $context
     * @param Policy $policy
     */
    public function __construct($receivablesWarranty, $context, $policy)
    {
      $this->receivablesWarranty = $receivablesWarranty;
      $this->context = $context;
      $this->policy = $policy;
    }

    /**
     * @return ReceivablesWarranty
     */
    public function getReceivablesWarranty()
    {
      return $this->receivablesWarranty;
    }

    /**
     * @param ReceivablesWarranty $receivablesWarranty
     * @return CreateReceivablesWarranty
     */
    public function setReceivablesWarranty($receivablesWarranty)
    {
      $this->receivablesWarranty = $receivablesWarranty;
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
     * @return CreateReceivablesWarranty
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
     * @return CreateReceivablesWarranty
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
    }

}
