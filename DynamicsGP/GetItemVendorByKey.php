<?php

class GetItemVendorByKey
{

    /**
     * @var ItemVendorKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param ItemVendorKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return ItemVendorKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param ItemVendorKey $key
     * @return GetItemVendorByKey
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
     * @return GetItemVendorByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
