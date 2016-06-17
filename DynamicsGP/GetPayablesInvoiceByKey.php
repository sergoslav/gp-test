<?php

class GetPayablesInvoiceByKey
{

    /**
     * @var PayablesDocumentKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param PayablesDocumentKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return PayablesDocumentKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param PayablesDocumentKey $key
     * @return GetPayablesInvoiceByKey
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
     * @return GetPayablesInvoiceByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
