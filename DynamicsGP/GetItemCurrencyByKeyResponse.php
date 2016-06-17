<?php

class GetItemCurrencyByKeyResponse
{

    /**
     * @var ItemCurrency $GetItemCurrencyByKeyResult
     */
    protected $GetItemCurrencyByKeyResult = null;

    /**
     * @param ItemCurrency $GetItemCurrencyByKeyResult
     */
    public function __construct($GetItemCurrencyByKeyResult)
    {
      $this->GetItemCurrencyByKeyResult = $GetItemCurrencyByKeyResult;
    }

    /**
     * @return ItemCurrency
     */
    public function getGetItemCurrencyByKeyResult()
    {
      return $this->GetItemCurrencyByKeyResult;
    }

    /**
     * @param ItemCurrency $GetItemCurrencyByKeyResult
     * @return GetItemCurrencyByKeyResponse
     */
    public function setGetItemCurrencyByKeyResult($GetItemCurrencyByKeyResult)
    {
      $this->GetItemCurrencyByKeyResult = $GetItemCurrencyByKeyResult;
      return $this;
    }

}
