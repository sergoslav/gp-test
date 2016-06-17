<?php

class ItemCurrencyCriteria extends Criteria
{

    /**
     * @var LikeRestrictionOfstring $CurrencyISOCode
     */
    protected $CurrencyISOCode = null;

    /**
     * @var LikeRestrictionOfstring $ItemId
     */
    protected $ItemId = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getCurrencyISOCode()
    {
      return $this->CurrencyISOCode;
    }

    /**
     * @param LikeRestrictionOfstring $CurrencyISOCode
     * @return ItemCurrencyCriteria
     */
    public function setCurrencyISOCode($CurrencyISOCode)
    {
      $this->CurrencyISOCode = $CurrencyISOCode;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getItemId()
    {
      return $this->ItemId;
    }

    /**
     * @param LikeRestrictionOfstring $ItemId
     * @return ItemCurrencyCriteria
     */
    public function setItemId($ItemId)
    {
      $this->ItemId = $ItemId;
      return $this;
    }

}
