<?php

class GetItemCurrencyListResponse
{

    /**
     * @var ArrayOfItemCurrency $GetItemCurrencyListResult
     */
    protected $GetItemCurrencyListResult = null;

    /**
     * @param ArrayOfItemCurrency $GetItemCurrencyListResult
     */
    public function __construct($GetItemCurrencyListResult)
    {
      $this->GetItemCurrencyListResult = $GetItemCurrencyListResult;
    }

    /**
     * @return ArrayOfItemCurrency
     */
    public function getGetItemCurrencyListResult()
    {
      return $this->GetItemCurrencyListResult;
    }

    /**
     * @param ArrayOfItemCurrency $GetItemCurrencyListResult
     * @return GetItemCurrencyListResponse
     */
    public function setGetItemCurrencyListResult($GetItemCurrencyListResult)
    {
      $this->GetItemCurrencyListResult = $GetItemCurrencyListResult;
      return $this;
    }

}
