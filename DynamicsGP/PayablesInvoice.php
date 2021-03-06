<?php

class PayablesInvoice extends PayablesDebitDocument
{

    /**
     * @var PaymentTermsKey $PaymentTermsKey
     */
    protected $PaymentTermsKey = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return PaymentTermsKey
     */
    public function getPaymentTermsKey()
    {
      return $this->PaymentTermsKey;
    }

    /**
     * @param PaymentTermsKey $PaymentTermsKey
     * @return PayablesInvoice
     */
    public function setPaymentTermsKey($PaymentTermsKey)
    {
      $this->PaymentTermsKey = $PaymentTermsKey;
      return $this;
    }

}
