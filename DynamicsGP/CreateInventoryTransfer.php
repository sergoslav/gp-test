<?php

class CreateInventoryTransfer
{

    /**
     * @var InventoryTransfer $inventoryTransfer
     */
    protected $inventoryTransfer = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @var Policy $policy
     */
    protected $policy = null;

    /**
     * @param InventoryTransfer $inventoryTransfer
     * @param Context $context
     * @param Policy $policy
     */
    public function __construct($inventoryTransfer, $context, $policy)
    {
      $this->inventoryTransfer = $inventoryTransfer;
      $this->context = $context;
      $this->policy = $policy;
    }

    /**
     * @return InventoryTransfer
     */
    public function getInventoryTransfer()
    {
      return $this->inventoryTransfer;
    }

    /**
     * @param InventoryTransfer $inventoryTransfer
     * @return CreateInventoryTransfer
     */
    public function setInventoryTransfer($inventoryTransfer)
    {
      $this->inventoryTransfer = $inventoryTransfer;
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
     * @return CreateInventoryTransfer
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
     * @return CreateInventoryTransfer
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
    }

}
