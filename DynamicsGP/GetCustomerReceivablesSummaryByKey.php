<?php

class GetCustomerReceivablesSummaryByKey
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
     * @return GetCustomerReceivablesSummaryByKey
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
     * @return GetCustomerReceivablesSummaryByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
