<?php

class GetCustomerAddressByKey
{

    /**
     * @var CustomerAddressKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param CustomerAddressKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return CustomerAddressKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param CustomerAddressKey $key
     * @return GetCustomerAddressByKey
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
     * @return GetCustomerAddressByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
