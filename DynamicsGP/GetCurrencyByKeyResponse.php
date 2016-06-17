<?php

class GetCurrencyByKeyResponse
{

    /**
     * @var Currency $GetCurrencyByKeyResult
     */
    protected $GetCurrencyByKeyResult = null;

    /**
     * @param Currency $GetCurrencyByKeyResult
     */
    public function __construct($GetCurrencyByKeyResult)
    {
      $this->GetCurrencyByKeyResult = $GetCurrencyByKeyResult;
    }

    /**
     * @return Currency
     */
    public function getGetCurrencyByKeyResult()
    {
      return $this->GetCurrencyByKeyResult;
    }

    /**
     * @param Currency $GetCurrencyByKeyResult
     * @return GetCurrencyByKeyResponse
     */
    public function setGetCurrencyByKeyResult($GetCurrencyByKeyResult)
    {
      $this->GetCurrencyByKeyResult = $GetCurrencyByKeyResult;
      return $this;
    }

}
