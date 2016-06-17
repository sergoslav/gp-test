<?php

class GetChangedCurrencyKeyListResponse
{

    /**
     * @var ArrayOfChangedCurrencyKey $GetChangedCurrencyKeyListResult
     */
    protected $GetChangedCurrencyKeyListResult = null;

    /**
     * @param ArrayOfChangedCurrencyKey $GetChangedCurrencyKeyListResult
     */
    public function __construct($GetChangedCurrencyKeyListResult)
    {
      $this->GetChangedCurrencyKeyListResult = $GetChangedCurrencyKeyListResult;
    }

    /**
     * @return ArrayOfChangedCurrencyKey
     */
    public function getGetChangedCurrencyKeyListResult()
    {
      return $this->GetChangedCurrencyKeyListResult;
    }

    /**
     * @param ArrayOfChangedCurrencyKey $GetChangedCurrencyKeyListResult
     * @return GetChangedCurrencyKeyListResponse
     */
    public function setGetChangedCurrencyKeyListResult($GetChangedCurrencyKeyListResult)
    {
      $this->GetChangedCurrencyKeyListResult = $GetChangedCurrencyKeyListResult;
      return $this;
    }

}
