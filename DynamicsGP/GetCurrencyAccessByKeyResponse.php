<?php

class GetCurrencyAccessByKeyResponse
{

    /**
     * @var CurrencyAccess $GetCurrencyAccessByKeyResult
     */
    protected $GetCurrencyAccessByKeyResult = null;

    /**
     * @param CurrencyAccess $GetCurrencyAccessByKeyResult
     */
    public function __construct($GetCurrencyAccessByKeyResult)
    {
      $this->GetCurrencyAccessByKeyResult = $GetCurrencyAccessByKeyResult;
    }

    /**
     * @return CurrencyAccess
     */
    public function getGetCurrencyAccessByKeyResult()
    {
      return $this->GetCurrencyAccessByKeyResult;
    }

    /**
     * @param CurrencyAccess $GetCurrencyAccessByKeyResult
     * @return GetCurrencyAccessByKeyResponse
     */
    public function setGetCurrencyAccessByKeyResult($GetCurrencyAccessByKeyResult)
    {
      $this->GetCurrencyAccessByKeyResult = $GetCurrencyAccessByKeyResult;
      return $this;
    }

}
