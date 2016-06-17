<?php

class CurrencyChangedKeyCriteria extends BaseChangedKeyCriteria
{

    /**
     * @var BetweenRestrictionOfstring $IsoCode
     */
    protected $IsoCode = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return BetweenRestrictionOfstring
     */
    public function getIsoCode()
    {
      return $this->IsoCode;
    }

    /**
     * @param BetweenRestrictionOfstring $IsoCode
     * @return CurrencyChangedKeyCriteria
     */
    public function setIsoCode($IsoCode)
    {
      $this->IsoCode = $IsoCode;
      return $this;
    }

}
