<?php

class GetVendorAddressByKey
{

    /**
     * @var VendorAddressKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param VendorAddressKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return VendorAddressKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param VendorAddressKey $key
     * @return GetVendorAddressByKey
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
     * @return GetVendorAddressByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
