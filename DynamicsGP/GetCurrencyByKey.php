<?php

class GetCurrencyByKey
{

    /**
     * @var CurrencyKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param CurrencyKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return CurrencyKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param CurrencyKey $key
     * @return GetCurrencyByKey
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
     * @return GetCurrencyByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
