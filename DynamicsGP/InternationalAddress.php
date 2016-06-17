<?php

class InternationalAddress extends Address
{

    /**
     * @var CountryRegionCodeKey $CountryRegionCodeKey
     */
    protected $CountryRegionCodeKey = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return CountryRegionCodeKey
     */
    public function getCountryRegionCodeKey()
    {
      return $this->CountryRegionCodeKey;
    }

    /**
     * @param CountryRegionCodeKey $CountryRegionCodeKey
     * @return InternationalAddress
     */
    public function setCountryRegionCodeKey($CountryRegionCodeKey)
    {
      $this->CountryRegionCodeKey = $CountryRegionCodeKey;
      return $this;
    }

}
