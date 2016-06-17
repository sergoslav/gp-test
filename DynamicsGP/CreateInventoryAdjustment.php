<?php

class CreateInventoryAdjustment
{

    /**
     * @var InventoryAdjustment $inventoryAdjustment
     */
    protected $inventoryAdjustment = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @var Policy $policy
     */
    protected $policy = null;

    /**
     * @param InventoryAdjustment $inventoryAdjustment
     * @param Context $context
     * @param Policy $policy
     */
    public function __construct($inventoryAdjustment, $context, $policy)
    {
      $this->inventoryAdjustment = $inventoryAdjustment;
      $this->context = $context;
      $this->policy = $policy;
    }

    /**
     * @return InventoryAdjustment
     */
    public function getInventoryAdjustment()
    {
      return $this->inventoryAdjustment;
    }

    /**
     * @param InventoryAdjustment $inventoryAdjustment
     * @return CreateInventoryAdjustment
     */
    public function setInventoryAdjustment($inventoryAdjustment)
    {
      $this->inventoryAdjustment = $inventoryAdjustment;
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
     * @return CreateInventoryAdjustment
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
     * @return CreateInventoryAdjustment
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
    }

}
