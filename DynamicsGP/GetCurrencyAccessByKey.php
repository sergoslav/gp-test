<?php

class GetCurrencyAccessByKey
{

    /**
     * @var CurrencyAccessKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param CurrencyAccessKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return CurrencyAccessKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param CurrencyAccessKey $key
     * @return GetCurrencyAccessByKey
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
     * @return GetCurrencyAccessByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
