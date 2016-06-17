<?php

class GetPricingByKey
{

    /**
     * @var PricingKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param PricingKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return PricingKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param PricingKey $key
     * @return GetPricingByKey
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
     * @return GetPricingByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
