<?php

class GetCustomerByKey
{

    /**
     * @var CustomerKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param CustomerKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return CustomerKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param CustomerKey $key
     * @return GetCustomerByKey
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
     * @return GetCustomerByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
