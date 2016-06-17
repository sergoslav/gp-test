<?php

class GetCompanyByKeyResponse
{

    /**
     * @var Company $GetCompanyByKeyResult
     */
    protected $GetCompanyByKeyResult = null;

    /**
     * @param Company $GetCompanyByKeyResult
     */
    public function __construct($GetCompanyByKeyResult)
    {
      $this->GetCompanyByKeyResult = $GetCompanyByKeyResult;
    }

    /**
     * @return Company
     */
    public function getGetCompanyByKeyResult()
    {
      return $this->GetCompanyByKeyResult;
    }

    /**
     * @param Company $GetCompanyByKeyResult
     * @return GetCompanyByKeyResponse
     */
    public function setGetCompanyByKeyResult($GetCompanyByKeyResult)
    {
      $this->GetCompanyByKeyResult = $GetCompanyByKeyResult;
      return $this;
    }

}
