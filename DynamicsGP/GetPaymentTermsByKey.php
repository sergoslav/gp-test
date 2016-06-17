<?php

class GetPaymentTermsByKey
{

    /**
     * @var PaymentTermsKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param PaymentTermsKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return PaymentTermsKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param PaymentTermsKey $key
     * @return GetPaymentTermsByKey
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
     * @return GetPaymentTermsByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
