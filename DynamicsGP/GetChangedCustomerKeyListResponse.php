<?php

class GetChangedCustomerKeyListResponse
{

    /**
     * @var ArrayOfChangedCustomerKey $GetChangedCustomerKeyListResult
     */
    protected $GetChangedCustomerKeyListResult = null;

    /**
     * @param ArrayOfChangedCustomerKey $GetChangedCustomerKeyListResult
     */
    public function __construct($GetChangedCustomerKeyListResult)
    {
      $this->GetChangedCustomerKeyListResult = $GetChangedCustomerKeyListResult;
    }

    /**
     * @return ArrayOfChangedCustomerKey
     */
    public function getGetChangedCustomerKeyListResult()
    {
      return $this->GetChangedCustomerKeyListResult;
    }

    /**
     * @param ArrayOfChangedCustomerKey $GetChangedCustomerKeyListResult
     * @return GetChangedCustomerKeyListResponse
     */
    public function setGetChangedCustomerKeyListResult($GetChangedCustomerKeyListResult)
    {
      $this->GetChangedCustomerKeyListResult = $GetChangedCustomerKeyListResult;
      return $this;
    }

}
