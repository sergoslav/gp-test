<?php

class GetCurrencyPostingAccountByKey
{

    /**
     * @var CurrencyPostingAccountKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param CurrencyPostingAccountKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return CurrencyPostingAccountKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param CurrencyPostingAccountKey $key
     * @return GetCurrencyPostingAccountByKey
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
     * @return GetCurrencyPostingAccountByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
