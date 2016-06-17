<?php

class GetCashReceiptByKey
{

    /**
     * @var ReceivablesDocumentKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param ReceivablesDocumentKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return ReceivablesDocumentKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param ReceivablesDocumentKey $key
     * @return GetCashReceiptByKey
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
     * @return GetCashReceiptByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
