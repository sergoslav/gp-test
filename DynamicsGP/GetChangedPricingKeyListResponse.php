<?php

class GetChangedPricingKeyListResponse
{

    /**
     * @var ArrayOfChangedPricingKey $GetChangedPricingKeyListResult
     */
    protected $GetChangedPricingKeyListResult = null;

    /**
     * @param ArrayOfChangedPricingKey $GetChangedPricingKeyListResult
     */
    public function __construct($GetChangedPricingKeyListResult)
    {
      $this->GetChangedPricingKeyListResult = $GetChangedPricingKeyListResult;
    }

    /**
     * @return ArrayOfChangedPricingKey
     */
    public function getGetChangedPricingKeyListResult()
    {
      return $this->GetChangedPricingKeyListResult;
    }

    /**
     * @param ArrayOfChangedPricingKey $GetChangedPricingKeyListResult
     * @return GetChangedPricingKeyListResponse
     */
    public function setGetChangedPricingKeyListResult($GetChangedPricingKeyListResult)
    {
      $this->GetChangedPricingKeyListResult = $GetChangedPricingKeyListResult;
      return $this;
    }

}
