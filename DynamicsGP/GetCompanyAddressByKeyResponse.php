<?php

class GetCompanyAddressByKeyResponse
{

    /**
     * @var CompanyAddress $GetCompanyAddressByKeyResult
     */
    protected $GetCompanyAddressByKeyResult = null;

    /**
     * @param CompanyAddress $GetCompanyAddressByKeyResult
     */
    public function __construct($GetCompanyAddressByKeyResult)
    {
      $this->GetCompanyAddressByKeyResult = $GetCompanyAddressByKeyResult;
    }

    /**
     * @return CompanyAddress
     */
    public function getGetCompanyAddressByKeyResult()
    {
      return $this->GetCompanyAddressByKeyResult;
    }

    /**
     * @param CompanyAddress $GetCompanyAddressByKeyResult
     * @return GetCompanyAddressByKeyResponse
     */
    public function setGetCompanyAddressByKeyResult($GetCompanyAddressByKeyResult)
    {
      $this->GetCompanyAddressByKeyResult = $GetCompanyAddressByKeyResult;
      return $this;
    }

}
