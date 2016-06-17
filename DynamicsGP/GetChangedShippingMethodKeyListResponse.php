<?php

class GetChangedShippingMethodKeyListResponse
{

    /**
     * @var ArrayOfChangedShippingMethodKey $GetChangedShippingMethodKeyListResult
     */
    protected $GetChangedShippingMethodKeyListResult = null;

    /**
     * @param ArrayOfChangedShippingMethodKey $GetChangedShippingMethodKeyListResult
     */
    public function __construct($GetChangedShippingMethodKeyListResult)
    {
      $this->GetChangedShippingMethodKeyListResult = $GetChangedShippingMethodKeyListResult;
    }

    /**
     * @return ArrayOfChangedShippingMethodKey
     */
    public function getGetChangedShippingMethodKeyListResult()
    {
      return $this->GetChangedShippingMethodKeyListResult;
    }

    /**
     * @param ArrayOfChangedShippingMethodKey $GetChangedShippingMethodKeyListResult
     * @return GetChangedShippingMethodKeyListResponse
     */
    public function setGetChangedShippingMethodKeyListResult($GetChangedShippingMethodKeyListResult)
    {
      $this->GetChangedShippingMethodKeyListResult = $GetChangedShippingMethodKeyListResult;
      return $this;
    }

}
