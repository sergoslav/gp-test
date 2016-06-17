<?php

class GetCurrencyAccessListResponse
{

    /**
     * @var ArrayOfCurrencyAccess $GetCurrencyAccessListResult
     */
    protected $GetCurrencyAccessListResult = null;

    /**
     * @param ArrayOfCurrencyAccess $GetCurrencyAccessListResult
     */
    public function __construct($GetCurrencyAccessListResult)
    {
      $this->GetCurrencyAccessListResult = $GetCurrencyAccessListResult;
    }

    /**
     * @return ArrayOfCurrencyAccess
     */
    public function getGetCurrencyAccessListResult()
    {
      return $this->GetCurrencyAccessListResult;
    }

    /**
     * @param ArrayOfCurrencyAccess $GetCurrencyAccessListResult
     * @return GetCurrencyAccessListResponse
     */
    public function setGetCurrencyAccessListResult($GetCurrencyAccessListResult)
    {
      $this->GetCurrencyAccessListResult = $GetCurrencyAccessListResult;
      return $this;
    }

}
