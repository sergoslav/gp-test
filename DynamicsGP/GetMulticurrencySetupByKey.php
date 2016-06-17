<?php

class GetMulticurrencySetupByKey
{

    /**
     * @var MulticurrencySetupKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param MulticurrencySetupKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return MulticurrencySetupKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param MulticurrencySetupKey $key
     * @return GetMulticurrencySetupByKey
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
     * @return GetMulticurrencySetupByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
