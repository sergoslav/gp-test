<?php

class PaymentCardAccountKey extends ReferenceKey
{

    /**
     * @var string $Number
     */
    protected $Number = null;

    /**
     * @var PaymentCardTypeKey $PaymentCardTypeKey
     */
    protected $PaymentCardTypeKey = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param string $Number
     * @return PaymentCardAccountKey
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return PaymentCardTypeKey
     */
    public function getPaymentCardTypeKey()
    {
      return $this->PaymentCardTypeKey;
    }

    /**
     * @param PaymentCardTypeKey $PaymentCardTypeKey
     * @return PaymentCardAccountKey
     */
    public function setPaymentCardTypeKey($PaymentCardTypeKey)
    {
      $this->PaymentCardTypeKey = $PaymentCardTypeKey;
      return $this;
    }

}
