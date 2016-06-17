<?php

class GetWarehouseByKey
{

    /**
     * @var WarehouseKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param WarehouseKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return WarehouseKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param WarehouseKey $key
     * @return GetWarehouseByKey
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
     * @return GetWarehouseByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
