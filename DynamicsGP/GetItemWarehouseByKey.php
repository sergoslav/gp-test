<?php

class GetItemWarehouseByKey
{

    /**
     * @var ItemWarehouseKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param ItemWarehouseKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return ItemWarehouseKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param ItemWarehouseKey $key
     * @return GetItemWarehouseByKey
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
     * @return GetItemWarehouseByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
