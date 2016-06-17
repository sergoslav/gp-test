<?php

class GetChangedCustomerAddressKeyListResponse
{

    /**
     * @var ArrayOfChangedCustomerAddressKey $GetChangedCustomerAddressKeyListResult
     */
    protected $GetChangedCustomerAddressKeyListResult = null;

    /**
     * @param ArrayOfChangedCustomerAddressKey $GetChangedCustomerAddressKeyListResult
     */
    public function __construct($GetChangedCustomerAddressKeyListResult)
    {
      $this->GetChangedCustomerAddressKeyListResult = $GetChangedCustomerAddressKeyListResult;
    }

    /**
     * @return ArrayOfChangedCustomerAddressKey
     */
    public function getGetChangedCustomerAddressKeyListResult()
    {
      return $this->GetChangedCustomerAddressKeyListResult;
    }

    /**
     * @param ArrayOfChangedCustomerAddressKey $GetChangedCustomerAddressKeyListResult
     * @return GetChangedCustomerAddressKeyListResponse
     */
    public function setGetChangedCustomerAddressKeyListResult($GetChangedCustomerAddressKeyListResult)
    {
      $this->GetChangedCustomerAddressKeyListResult = $GetChangedCustomerAddressKeyListResult;
      return $this;
    }

}
