<?php

class GetCurrencyPostingAccountByKeyResponse
{

    /**
     * @var CurrencyPostingAccount $GetCurrencyPostingAccountByKeyResult
     */
    protected $GetCurrencyPostingAccountByKeyResult = null;

    /**
     * @param CurrencyPostingAccount $GetCurrencyPostingAccountByKeyResult
     */
    public function __construct($GetCurrencyPostingAccountByKeyResult)
    {
      $this->GetCurrencyPostingAccountByKeyResult = $GetCurrencyPostingAccountByKeyResult;
    }

    /**
     * @return CurrencyPostingAccount
     */
    public function getGetCurrencyPostingAccountByKeyResult()
    {
      return $this->GetCurrencyPostingAccountByKeyResult;
    }

    /**
     * @param CurrencyPostingAccount $GetCurrencyPostingAccountByKeyResult
     * @return GetCurrencyPostingAccountByKeyResponse
     */
    public function setGetCurrencyPostingAccountByKeyResult($GetCurrencyPostingAccountByKeyResult)
    {
      $this->GetCurrencyPostingAccountByKeyResult = $GetCurrencyPostingAccountByKeyResult;
      return $this;
    }

}
