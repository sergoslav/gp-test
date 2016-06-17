<?php

class GetVendorByKey
{

    /**
     * @var VendorKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param VendorKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return VendorKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param VendorKey $key
     * @return GetVendorByKey
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
     * @return GetVendorByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
