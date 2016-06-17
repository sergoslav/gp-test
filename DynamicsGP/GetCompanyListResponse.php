<?php

class GetCompanyListResponse
{

    /**
     * @var ArrayOfCompany $GetCompanyListResult
     */
    protected $GetCompanyListResult = null;

    /**
     * @param ArrayOfCompany $GetCompanyListResult
     */
    public function __construct($GetCompanyListResult)
    {
      $this->GetCompanyListResult = $GetCompanyListResult;
    }

    /**
     * @return ArrayOfCompany
     */
    public function getGetCompanyListResult()
    {
      return $this->GetCompanyListResult;
    }

    /**
     * @param ArrayOfCompany $GetCompanyListResult
     * @return GetCompanyListResponse
     */
    public function setGetCompanyListResult($GetCompanyListResult)
    {
      $this->GetCompanyListResult = $GetCompanyListResult;
      return $this;
    }

}
