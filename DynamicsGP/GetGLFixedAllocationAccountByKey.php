<?php

class GetGLFixedAllocationAccountByKey
{

    /**
     * @var GLAccountNumberKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param GLAccountNumberKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param GLAccountNumberKey $key
     * @return GetGLFixedAllocationAccountByKey
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
     * @return GetGLFixedAllocationAccountByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
