<?php

class GetBankByKey
{

    /**
     * @var BankKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param BankKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return BankKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param BankKey $key
     * @return GetBankByKey
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
     * @return GetBankByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
