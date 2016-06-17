<?php

class GetGLPostedTransactionByKey
{

    /**
     * @var GLTransactionPostedKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param GLTransactionPostedKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return GLTransactionPostedKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param GLTransactionPostedKey $key
     * @return GetGLPostedTransactionByKey
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
     * @return GetGLPostedTransactionByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
