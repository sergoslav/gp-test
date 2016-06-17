<?php

class PriceLevelChangedKeyCriteria extends BaseChangedKeyCriteria
{

    /**
     * @var BetweenRestrictionOfstring $PriceLevelKeyId
     */
    protected $PriceLevelKeyId = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return PriceLevelChangedKeyCriteria
     */
    public function setPriceLevelKeyId($PriceLevelKeyId)
    {
      $this->PriceLevelKeyId = $PriceLevelKeyId;
      return $this;
    }

}
