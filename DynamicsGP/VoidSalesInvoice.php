<?php

class VoidSalesInvoice
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
     * @var Policy $policy
     */
    protected $policy = null;

    /**
     * @param SalesDocumentKey $key
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
     * @return SalesDocumentKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param SalesDocumentKey $key
     * @return VoidSalesInvoice
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
     * @return VoidSalesInvoice
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
     * @return VoidSalesInvoice
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
    }

}
