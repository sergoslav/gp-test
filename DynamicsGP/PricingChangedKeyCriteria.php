<?php

class PricingChangedKeyCriteria extends BaseChangedKeyCriteria
{

    /**
     * @var BetweenRestrictionOfstring $CurrencyKeyId
     */
    protected $CurrencyKeyId = null;

    /**
     * @var BetweenRestrictionOfstring $ItemKeyId
     */
    protected $ItemKeyId = null;

    /**
     * @var BetweenRestrictionOfstring $PriceLevelKeyId
     */
    protected $PriceLevelKeyId = null;

    /**
     * @var BetweenRestrictionOfstring $UofMKeyId
     */
    protected $UofMKeyId = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return BetweenRestrictionOfstring
     */
    public function getCurrencyKeyId()
    {
      return $this->CurrencyKeyId;
    }

    /**
     * @param BetweenRestrictionOfstring $CurrencyKeyId
     * @return PricingChangedKeyCriteria
     */
    public function setCurrencyKeyId($CurrencyKeyId)
    {
      $this->CurrencyKeyId = $CurrencyKeyId;
      return $this;
    }

    /**
     * @return BetweenRestrictionOfstring
     */
    public function getItemKeyId()
    {
      return $this->ItemKeyId;
    }

    /**
     * @param BetweenRestrictionOfstring $ItemKeyId
     * @return PricingChangedKeyCriteria
     */
    public function setItemKeyId($ItemKeyId)
    {
      $this->ItemKeyId = $ItemKeyId;
      return $this;
    }

    /**
     * @return BetweenRestrictionOfstring
     */
    public function getPriceLevelKeyId()
    {
      return $this->PriceLevelKeyId;
    }

    /**
     * @param BetweenRestrictionOfstring $PriceLevelKeyId
     * @return PricingChangedKeyCriteria
     */
    public function setPriceLevelKeyId($PriceLevelKeyId)
    {
      $this->PriceLevelKeyId = $PriceLevelKeyId;
      return $this;
    }

    /**
     * @return BetweenRestrictionOfstring
     */
    public function getUofMKeyId()
    {
      return $this->UofMKeyId;
    }

    /**
     * @param BetweenRestrictionOfstring $UofMKeyId
     * @return PricingChangedKeyCriteria
     */
    public function setUofMKeyId($UofMKeyId)
    {
      $this->UofMKeyId = $UofMKeyId;
      return $this;
    }

}
