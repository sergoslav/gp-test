<?php

class GetSalesReturnByKey
{

    /**
     * @var SalesDocumentKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param SalesDocumentKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return SalesDocumentKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param SalesDocumentKey $key
     * @return GetSalesReturnByKey
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
     * @return GetSalesReturnByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
