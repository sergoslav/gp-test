<?php

class GetPriceLevelByKeyResponse
{

    /**
     * @var PriceLevel $GetPriceLevelByKeyResult
     */
    protected $GetPriceLevelByKeyResult = null;

    /**
     * @param PriceLevel $GetPriceLevelByKeyResult
     */
    public function __construct($GetPriceLevelByKeyResult)
    {
      $this->GetPriceLevelByKeyResult = $GetPriceLevelByKeyResult;
    }

    /**
     * @return PriceLevel
     */
    public function getGetPriceLevelByKeyResult()
    {
      return $this->GetPriceLevelByKeyResult;
    }

    /**
     * @param PriceLevel $GetPriceLevelByKeyResult
     * @return GetPriceLevelByKeyResponse
     */
    public function setGetPriceLevelByKeyResult($GetPriceLevelByKeyResult)
    {
      $this->GetPriceLevelByKeyResult = $GetPriceLevelByKeyResult;
      return $this;
    }

}
