<?php

class GetPurchaseOrderByKey
{

    /**
     * @var PurchaseTransactionKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param PurchaseTransactionKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return PurchaseTransactionKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param PurchaseTransactionKey $key
     * @return GetPurchaseOrderByKey
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
     * @return GetPurchaseOrderByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
