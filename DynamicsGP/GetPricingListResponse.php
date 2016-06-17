<?php

class GetPricingListResponse
{

    /**
     * @var ArrayOfPricingSummary $GetPricingListResult
     */
    protected $GetPricingListResult = null;

    /**
     * @param ArrayOfPricingSummary $GetPricingListResult
     */
    public function __construct($GetPricingListResult)
    {
      $this->GetPricingListResult = $GetPricingListResult;
    }

    /**
     * @return ArrayOfPricingSummary
     */
    public function getGetPricingListResult()
    {
      return $this->GetPricingListResult;
    }

    /**
     * @param ArrayOfPricingSummary $GetPricingListResult
     * @return GetPricingListResponse
     */
    public function setGetPricingListResult($GetPricingListResult)
    {
      $this->GetPricingListResult = $GetPricingListResult;
      return $this;
    }

}
