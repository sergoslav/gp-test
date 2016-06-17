<?php

class GetPaymentCardTypeByKey
{

    /**
     * @var PaymentCardTypeKey $key
     */
    protected $key = null;

    /**
     * @var Context $context
     */
    protected $context = null;

    /**
     * @param PaymentCardTypeKey $key
     * @param Context $context
     */
    public function __construct($key, $context)
    {
      $this->key = $key;
      $this->context = $context;
    }

    /**
     * @return PaymentCardTypeKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param PaymentCardTypeKey $key
     * @return GetPaymentCardTypeByKey
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
     * @return GetPaymentCardTypeByKey
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
