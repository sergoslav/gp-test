<?php

class GetBankByKeyResponse
{

    /**
     * @var Bank $GetBankByKeyResult
     */
    protected $GetBankByKeyResult = null;

    /**
     * @param Bank $GetBankByKeyResult
     */
    public function __construct($GetBankByKeyResult)
    {
      $this->GetBankByKeyResult = $GetBankByKeyResult;
    }

    /**
     * @return Bank
     */
    public function getGetBankByKeyResult()
    {
      return $this->GetBankByKeyResult;
    }

    /**
     * @param Bank $GetBankByKeyResult
     * @return GetBankByKeyResponse
     */
    public function setGetBankByKeyResult($GetBankByKeyResult)
    {
      $this->GetBankByKeyResult = $GetBankByKeyResult;
      return $this;
    }

}
