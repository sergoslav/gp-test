<?php

class UpdatePurchaseOrder
{

    /**
     * @var PurchaseOrder $purchaseOrder
     */
    protected $purchaseOrder = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @var Policy $policy
     */
    protected $policy = null;

    /**
     * @param PurchaseOrder $purchaseOrder
     * @param Context $context
     * @param Policy $policy
     */
    public function __construct($purchaseOrder, $context, $policy)
    {
      $this->purchaseOrder = $purchaseOrder;
      $this->context = $context;
      $this->policy = $policy;
    }

    /**
     * @return PurchaseOrder
     */
    public function getPurchaseOrder()
    {
      return $this->purchaseOrder;
    }

    /**
     * @param PurchaseOrder $purchaseOrder
     * @return UpdatePurchaseOrder
     */
    public function setPurchaseOrder($purchaseOrder)
    {
      $this->purchaseOrder = $purchaseOrder;
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
     * @return UpdatePurchaseOrder
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
     * @return UpdatePurchaseOrder
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
    }

}
