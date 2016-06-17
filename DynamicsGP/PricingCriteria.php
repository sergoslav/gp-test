<?php

class PricingCriteria extends Criteria
{

    /**
     * @var LikeRestrictionOfstring $CurrencyISOCode
     */
    protected $CurrencyISOCode = null;

    /**
     * @var LikeRestrictionOfstring $ItemId
     */
    protected $ItemId = null;

    /**
     * @var BetweenRestrictionOfNullableOfdateTime $LastModifiedDate
     */
    protected $LastModifiedDate = null;

    /**
     * @var LikeRestrictionOfstring $PriceLevelId
     */
    protected $PriceLevelId = null;

    /**
     * @var LikeRestrictionOfstring $UofM
     */
    protected $UofM = null;

    
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
     * @return PricingCriteria
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
     * @return PricingCriteria
     */
    public function setItemId($ItemId)
    {
      $this->ItemId = $ItemId;
      return $this;
    }

    /**
     * @return BetweenRestrictionOfNullableOfdateTime
     */
    public function getLastModifiedDate()
    {
      return $this->LastModifiedDate;
    }

    /**
     * @param BetweenRestrictionOfNullableOfdateTime $LastModifiedDate
     * @return PricingCriteria
     */
    public function setLastModifiedDate($LastModifiedDate)
    {
      $this->LastModifiedDate = $LastModifiedDate;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getPriceLevelId()
    {
      return $this->PriceLevelId;
    }

    /**
     * @param LikeRestrictionOfstring $PriceLevelId
     * @return PricingCriteria
     */
    public function setPriceLevelId($PriceLevelId)
    {
      $this->PriceLevelId = $PriceLevelId;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getUofM()
    {
      return $this->UofM;
    }

    /**
     * @param LikeRestrictionOfstring $UofM
     * @return PricingCriteria
     */
    public function setUofM($UofM)
    {
      $this->UofM = $UofM;
      return $this;
    }

}
