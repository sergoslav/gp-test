<?php

class GetPricingByKeyResponse
{

    /**
     * @var Pricing $GetPricingByKeyResult
     */
    protected $GetPricingByKeyResult = null;

    /**
     * @param Pricing $GetPricingByKeyResult
     */
    public function __construct($GetPricingByKeyResult)
    {
      $this->GetPricingByKeyResult = $GetPricingByKeyResult;
    }

    /**
     * @return Pricing
     */
    public function getGetPricingByKeyResult()
    {
      return $this->GetPricingByKeyResult;
    }

    /**
     * @param Pricing $GetPricingByKeyResult
     * @return GetPricingByKeyResponse
     */
    public function setGetPricingByKeyResult($GetPricingByKeyResult)
    {
      $this->GetPricingByKeyResult = $GetPricingByKeyResult;
      return $this;
    }

}
