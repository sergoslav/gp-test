<?php

class GetSalesProcessHoldSetupByKey
{

    /**
     * @var SalesProcessHoldSetupKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param SalesProcessHoldSetupKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return SalesProcessHoldSetupKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param SalesProcessHoldSetupKey $key
     * @return GetSalesProcessHoldSetupByKey
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
     * @return GetSalesProcessHoldSetupByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
