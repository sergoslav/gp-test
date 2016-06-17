<?php

class GetPaymentTermsByKeyResponse
{

    /**
     * @var PaymentTerms $GetPaymentTermsByKeyResult
     */
    protected $GetPaymentTermsByKeyResult = null;

    /**
     * @param PaymentTerms $GetPaymentTermsByKeyResult
     */
    public function __construct($GetPaymentTermsByKeyResult)
    {
      $this->GetPaymentTermsByKeyResult = $GetPaymentTermsByKeyResult;
    }

    /**
     * @return PaymentTerms
     */
    public function getGetPaymentTermsByKeyResult()
    {
      return $this->GetPaymentTermsByKeyResult;
    }

    /**
     * @param PaymentTerms $GetPaymentTermsByKeyResult
     * @return GetPaymentTermsByKeyResponse
     */
    public function setGetPaymentTermsByKeyResult($GetPaymentTermsByKeyResult)
    {
      $this->GetPaymentTermsByKeyResult = $GetPaymentTermsByKeyResult;
      return $this;
    }

}
