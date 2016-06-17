<?php

class GetShippingMethodByKeyResponse
{

    /**
     * @var ShippingMethod $GetShippingMethodByKeyResult
     */
    protected $GetShippingMethodByKeyResult = null;

    /**
     * @param ShippingMethod $GetShippingMethodByKeyResult
     */
    public function __construct($GetShippingMethodByKeyResult)
    {
      $this->GetShippingMethodByKeyResult = $GetShippingMethodByKeyResult;
    }

    /**
     * @return ShippingMethod
     */
    public function getGetShippingMethodByKeyResult()
    {
      return $this->GetShippingMethodByKeyResult;
    }

    /**
     * @param ShippingMethod $GetShippingMethodByKeyResult
     * @return GetShippingMethodByKeyResponse
     */
    public function setGetShippingMethodByKeyResult($GetShippingMethodByKeyResult)
    {
      $this->GetShippingMethodByKeyResult = $GetShippingMethodByKeyResult;
      return $this;
    }

}
