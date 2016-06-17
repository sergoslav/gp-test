<?php

class GetTaxDetailByKey
{

    /**
     * @var TaxDetailKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param TaxDetailKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return TaxDetailKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param TaxDetailKey $key
     * @return GetTaxDetailByKey
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
     * @return GetTaxDetailByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
