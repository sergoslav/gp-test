<?php

class GetItemCurrencyByKey
{

    /**
     * @var ItemCurrencyKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param ItemCurrencyKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return ItemCurrencyKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param ItemCurrencyKey $key
     * @return GetItemCurrencyByKey
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
     * @return GetItemCurrencyByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
