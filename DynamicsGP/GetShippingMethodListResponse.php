<?php

class GetShippingMethodListResponse
{

    /**
     * @var ArrayOfShippingMethod $GetShippingMethodListResult
     */
    protected $GetShippingMethodListResult = null;

    /**
     * @param ArrayOfShippingMethod $GetShippingMethodListResult
     */
    public function __construct($GetShippingMethodListResult)
    {
      $this->GetShippingMethodListResult = $GetShippingMethodListResult;
    }

    /**
     * @return ArrayOfShippingMethod
     */
    public function getGetShippingMethodListResult()
    {
      return $this->GetShippingMethodListResult;
    }

    /**
     * @param ArrayOfShippingMethod $GetShippingMethodListResult
     * @return GetShippingMethodListResponse
     */
    public function setGetShippingMethodListResult($GetShippingMethodListResult)
    {
      $this->GetShippingMethodListResult = $GetShippingMethodListResult;
      return $this;
    }

}
