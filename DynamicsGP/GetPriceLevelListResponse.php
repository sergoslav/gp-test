<?php

class GetPriceLevelListResponse
{

    /**
     * @var ArrayOfPriceLevel $GetPriceLevelListResult
     */
    protected $GetPriceLevelListResult = null;

    /**
     * @param ArrayOfPriceLevel $GetPriceLevelListResult
     */
    public function __construct($GetPriceLevelListResult)
    {
      $this->GetPriceLevelListResult = $GetPriceLevelListResult;
    }

    /**
     * @return ArrayOfPriceLevel
     */
    public function getGetPriceLevelListResult()
    {
      return $this->GetPriceLevelListResult;
    }

    /**
     * @param ArrayOfPriceLevel $GetPriceLevelListResult
     * @return GetPriceLevelListResponse
     */
    public function setGetPriceLevelListResult($GetPriceLevelListResult)
    {
      $this->GetPriceLevelListResult = $GetPriceLevelListResult;
      return $this;
    }

}
