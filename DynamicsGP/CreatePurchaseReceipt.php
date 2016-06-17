<?php

class CreatePurchaseReceipt
{

    /**
     * @var PurchaseReceipt $purchaseReceipt
     */
    protected $purchaseReceipt = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @var Policy $policy
     */
    protected $policy = null;

    /**
     * @param PurchaseReceipt $purchaseReceipt
     * @param Context $context
     * @param Policy $policy
     */
    public function __construct($purchaseReceipt, $context, $policy)
    {
      $this->purchaseReceipt = $purchaseReceipt;
      $this->context = $context;
      $this->policy = $policy;
    }

    /**
     * @return PurchaseReceipt
     */
    public function getPurchaseReceipt()
    {
      return $this->purchaseReceipt;
    }

    /**
     * @param PurchaseReceipt $purchaseReceipt
     * @return CreatePurchaseReceipt
     */
    public function setPurchaseReceipt($purchaseReceipt)
    {
      $this->purchaseReceipt = $purchaseReceipt;
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
     * @return CreatePurchaseReceipt
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
     * @return CreatePurchaseReceipt
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
    }

}
