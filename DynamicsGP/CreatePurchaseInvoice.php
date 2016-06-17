<?php

class CreatePurchaseInvoice
{

    /**
     * @var PurchaseInvoice $purchaseInvoice
     */
    protected $purchaseInvoice = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @var Policy $policy
     */
    protected $policy = null;

    /**
     * @param PurchaseInvoice $purchaseInvoice
     * @param Context $context
     * @param Policy $policy
     */
    public function __construct($purchaseInvoice, $context, $policy)
    {
      $this->purchaseInvoice = $purchaseInvoice;
      $this->context = $context;
      $this->policy = $policy;
    }

    /**
     * @return PurchaseInvoice
     */
    public function getPurchaseInvoice()
    {
      return $this->purchaseInvoice;
    }

    /**
     * @param PurchaseInvoice $purchaseInvoice
     * @return CreatePurchaseInvoice
     */
    public function setPurchaseInvoice($purchaseInvoice)
    {
      $this->purchaseInvoice = $purchaseInvoice;
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
     * @return CreatePurchaseInvoice
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
     * @return CreatePurchaseInvoice
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
    }

}
