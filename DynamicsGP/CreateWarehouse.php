<?php

class CreateWarehouse
{

    /**
     * @var Warehouse $warehouse
     */
    protected $warehouse = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @var Policy $policy
     */
    protected $policy = null;

    /**
     * @param Warehouse $warehouse
     * @param Context $context
     * @param Policy $policy
     */
    public function __construct($warehouse, $context, $policy)
    {
      $this->warehouse = $warehouse;
      $this->context = $context;
      $this->policy = $policy;
    }

    /**
     * @return Warehouse
     */
    public function getWarehouse()
    {
      return $this->warehouse;
    }

    /**
     * @param Warehouse $warehouse
     * @return CreateWarehouse
     */
    public function setWarehouse($warehouse)
    {
      $this->warehouse = $warehouse;
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
     * @return CreateWarehouse
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
     * @return CreateWarehouse
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
    }

}
