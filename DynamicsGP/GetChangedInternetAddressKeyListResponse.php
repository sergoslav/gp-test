<?php

class GetChangedInternetAddressKeyListResponse
{

    /**
     * @var ArrayOfChangedInternetAddressKey $GetChangedInternetAddressKeyListResult
     */
    protected $GetChangedInternetAddressKeyListResult = null;

    /**
     * @param ArrayOfChangedInternetAddressKey $GetChangedInternetAddressKeyListResult
     */
    public function __construct($GetChangedInternetAddressKeyListResult)
    {
      $this->GetChangedInternetAddressKeyListResult = $GetChangedInternetAddressKeyListResult;
    }

    /**
     * @return ArrayOfChangedInternetAddressKey
     */
    public function getGetChangedInternetAddressKeyListResult()
    {
      return $this->GetChangedInternetAddressKeyListResult;
    }

    /**
     * @param ArrayOfChangedInternetAddressKey $GetChangedInternetAddressKeyListResult
     * @return GetChangedInternetAddressKeyListResponse
     */
    public function setGetChangedInternetAddressKeyListResult($GetChangedInternetAddressKeyListResult)
    {
      $this->GetChangedInternetAddressKeyListResult = $GetChangedInternetAddressKeyListResult;
      return $this;
    }

}
