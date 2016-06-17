<?php

class GetInventoryAdjustmentByKey
{

    /**
     * @var InventoryKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param InventoryKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return InventoryKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param InventoryKey $key
     * @return GetInventoryAdjustmentByKey
     */
    public function setKey($key)
    {
      $this->key = $key;
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
     * @return GetInventoryAdjustmentByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
