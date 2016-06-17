<?php

class CreateInventoryVariance
{

    /**
     * @var InventoryVariance $inventoryVariance
     */
    protected $inventoryVariance = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @var Policy $policy
     */
    protected $policy = null;

    /**
     * @param InventoryVariance $inventoryVariance
     * @param Context $context
     * @param Policy $policy
     */
    public function __construct($inventoryVariance, $context, $policy)
    {
      $this->inventoryVariance = $inventoryVariance;
      $this->context = $context;
      $this->policy = $policy;
    }

    /**
     * @return InventoryVariance
     */
    public function getInventoryVariance()
    {
      return $this->inventoryVariance;
    }

    /**
     * @param InventoryVariance $inventoryVariance
     * @return CreateInventoryVariance
     */
    public function setInventoryVariance($inventoryVariance)
    {
      $this->inventoryVariance = $inventoryVariance;
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
     * @return CreateInventoryVariance
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
     * @return CreateInventoryVariance
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
    }

}
