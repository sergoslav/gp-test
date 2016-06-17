<?php

class VoidCashReceipt
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
     * @var Policy $policy
     */
    protected $policy = null;

    /**
     * @param ReceivablesDocumentKey $key
     * @param Context $context
     * @param Policy $policy
     */
    public function __construct($key, $context, $policy)
    {
      $this->key = $key;
      $this->context = $context;
      $this->policy = $policy;
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
     * @return VoidCashReceipt
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
     * @return VoidCashReceipt
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

    /**
     * @return Policy
     */
    public function getPolicy()
    {
      return $this->policy;
    }

    /**
     * @param Policy $policy
     * @return VoidCashReceipt
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
    }

}
