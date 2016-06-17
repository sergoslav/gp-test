<?php

class GetCurrencyPostingAccountListResponse
{

    /**
     * @var ArrayOfCurrencyPostingAccount $GetCurrencyPostingAccountListResult
     */
    protected $GetCurrencyPostingAccountListResult = null;

    /**
     * @param ArrayOfCurrencyPostingAccount $GetCurrencyPostingAccountListResult
     */
    public function __construct($GetCurrencyPostingAccountListResult)
    {
      $this->GetCurrencyPostingAccountListResult = $GetCurrencyPostingAccountListResult;
    }

    /**
     * @return ArrayOfCurrencyPostingAccount
     */
    public function getGetCurrencyPostingAccountListResult()
    {
      return $this->GetCurrencyPostingAccountListResult;
    }

    /**
     * @param ArrayOfCurrencyPostingAccount $GetCurrencyPostingAccountListResult
     * @return GetCurrencyPostingAccountListResponse
     */
    public function setGetCurrencyPostingAccountListResult($GetCurrencyPostingAccountListResult)
    {
      $this->GetCurrencyPostingAccountListResult = $GetCurrencyPostingAccountListResult;
      return $this;
    }

}
