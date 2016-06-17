<?php

class GetCorporateAccountByKeyResponse
{

    /**
     * @var CorporateAccount $GetCorporateAccountByKeyResult
     */
    protected $GetCorporateAccountByKeyResult = null;

    /**
     * @param CorporateAccount $GetCorporateAccountByKeyResult
     */
    public function __construct($GetCorporateAccountByKeyResult)
    {
      $this->GetCorporateAccountByKeyResult = $GetCorporateAccountByKeyResult;
    }

    /**
     * @return CorporateAccount
     */
    public function getGetCorporateAccountByKeyResult()
    {
      return $this->GetCorporateAccountByKeyResult;
    }

    /**
     * @param CorporateAccount $GetCorporateAccountByKeyResult
     * @return GetCorporateAccountByKeyResponse
     */
    public function setGetCorporateAccountByKeyResult($GetCorporateAccountByKeyResult)
    {
      $this->GetCorporateAccountByKeyResult = $GetCorporateAccountByKeyResult;
      return $this;
    }

}
