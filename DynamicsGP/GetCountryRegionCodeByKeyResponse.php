<?php

class GetCountryRegionCodeByKeyResponse
{

    /**
     * @var CountryRegionCode $GetCountryRegionCodeByKeyResult
     */
    protected $GetCountryRegionCodeByKeyResult = null;

    /**
     * @param CountryRegionCode $GetCountryRegionCodeByKeyResult
     */
    public function __construct($GetCountryRegionCodeByKeyResult)
    {
      $this->GetCountryRegionCodeByKeyResult = $GetCountryRegionCodeByKeyResult;
    }

    /**
     * @return CountryRegionCode
     */
    public function getGetCountryRegionCodeByKeyResult()
    {
      return $this->GetCountryRegionCodeByKeyResult;
    }

    /**
     * @param CountryRegionCode $GetCountryRegionCodeByKeyResult
     * @return GetCountryRegionCodeByKeyResponse
     */
    public function setGetCountryRegionCodeByKeyResult($GetCountryRegionCodeByKeyResult)
    {
      $this->GetCountryRegionCodeByKeyResult = $GetCountryRegionCodeByKeyResult;
      return $this;
    }

}
