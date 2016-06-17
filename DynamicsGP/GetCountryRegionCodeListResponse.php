<?php

class GetCountryRegionCodeListResponse
{

    /**
     * @var ArrayOfCountryRegionCode $GetCountryRegionCodeListResult
     */
    protected $GetCountryRegionCodeListResult = null;

    /**
     * @param ArrayOfCountryRegionCode $GetCountryRegionCodeListResult
     */
    public function __construct($GetCountryRegionCodeListResult)
    {
      $this->GetCountryRegionCodeListResult = $GetCountryRegionCodeListResult;
    }

    /**
     * @return ArrayOfCountryRegionCode
     */
    public function getGetCountryRegionCodeListResult()
    {
      return $this->GetCountryRegionCodeListResult;
    }

    /**
     * @param ArrayOfCountryRegionCode $GetCountryRegionCodeListResult
     * @return GetCountryRegionCodeListResponse
     */
    public function setGetCountryRegionCodeListResult($GetCountryRegionCodeListResult)
    {
      $this->GetCountryRegionCodeListResult = $GetCountryRegionCodeListResult;
      return $this;
    }

}
