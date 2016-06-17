<?php

class GetShippingMethodByKey
{

    /**
     * @var ShippingMethodKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param ShippingMethodKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return ShippingMethodKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param ShippingMethodKey $key
     * @return GetShippingMethodByKey
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
     * @return GetShippingMethodByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
