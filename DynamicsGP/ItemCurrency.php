<?php

class ItemCurrency extends BusinessObject
{

    /**
     * @var CurrencyDecimalPlaces $CurrencyDecimalPlaces
     */
    protected $CurrencyDecimalPlaces = null;

    /**
     * @var ItemCurrencyKey $Key
     */
    protected $Key = null;

    /**
     * @var MoneyAmount $ListPrice
     */
    protected $ListPrice = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return CurrencyDecimalPlaces
     */
    public function getCurrencyDecimalPlaces()
    {
      return $this->CurrencyDecimalPlaces;
    }

    /**
     * @param CurrencyDecimalPlaces $CurrencyDecimalPlaces
     * @return ItemCurrency
     */
    public function setCurrencyDecimalPlaces($CurrencyDecimalPlaces)
    {
      $this->CurrencyDecimalPlaces = $CurrencyDecimalPlaces;
      return $this;
    }

    /**
     * @return ItemCurrencyKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param ItemCurrencyKey $Key
     * @return ItemCurrency
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getListPrice()
    {
      return $this->ListPrice;
    }

    /**
     * @param MoneyAmount $ListPrice
     * @return ItemCurrency
     */
    public function setListPrice($ListPrice)
    {
      $this->ListPrice = $ListPrice;
      return $this;
    }

}
