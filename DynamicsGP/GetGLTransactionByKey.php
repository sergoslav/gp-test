<?php

class GetGLTransactionByKey
{

    /**
     * @var GLTransactionKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param GLTransactionKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return GLTransactionKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param GLTransactionKey $key
     * @return GetGLTransactionByKey
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
     * @return GetGLTransactionByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
