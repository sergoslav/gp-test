<?php

class GetPaymentCardTypeByKeyResponse
{

    /**
     * @var PaymentCardType $GetPaymentCardTypeByKeyResult
     */
    protected $GetPaymentCardTypeByKeyResult = null;

    /**
     * @param PaymentCardType $GetPaymentCardTypeByKeyResult
     */
    public function __construct($GetPaymentCardTypeByKeyResult)
    {
      $this->GetPaymentCardTypeByKeyResult = $GetPaymentCardTypeByKeyResult;
    }

    /**
     * @return PaymentCardType
     */
    public function getGetPaymentCardTypeByKeyResult()
    {
      return $this->GetPaymentCardTypeByKeyResult;
    }

    /**
     * @param PaymentCardType $GetPaymentCardTypeByKeyResult
     * @return GetPaymentCardTypeByKeyResponse
     */
    public function setGetPaymentCardTypeByKeyResult($GetPaymentCardTypeByKeyResult)
    {
      $this->GetPaymentCardTypeByKeyResult = $GetPaymentCardTypeByKeyResult;
      return $this;
    }

}
