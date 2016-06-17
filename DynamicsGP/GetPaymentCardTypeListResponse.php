<?php

class GetPaymentCardTypeListResponse
{

    /**
     * @var ArrayOfPaymentCardType $GetPaymentCardTypeListResult
     */
    protected $GetPaymentCardTypeListResult = null;

    /**
     * @param ArrayOfPaymentCardType $GetPaymentCardTypeListResult
     */
    public function __construct($GetPaymentCardTypeListResult)
    {
      $this->GetPaymentCardTypeListResult = $GetPaymentCardTypeListResult;
    }

    /**
     * @return ArrayOfPaymentCardType
     */
    public function getGetPaymentCardTypeListResult()
    {
      return $this->GetPaymentCardTypeListResult;
    }

    /**
     * @param ArrayOfPaymentCardType $GetPaymentCardTypeListResult
     * @return GetPaymentCardTypeListResponse
     */
    public function setGetPaymentCardTypeListResult($GetPaymentCardTypeListResult)
    {
      $this->GetPaymentCardTypeListResult = $GetPaymentCardTypeListResult;
      return $this;
    }

}
