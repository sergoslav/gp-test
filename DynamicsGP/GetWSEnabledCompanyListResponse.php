<?php

class GetWSEnabledCompanyListResponse
{

    /**
     * @var ArrayOfCompany $GetWSEnabledCompanyListResult
     */
    protected $GetWSEnabledCompanyListResult = null;

    /**
     * @param ArrayOfCompany $GetWSEnabledCompanyListResult
     */
    public function __construct($GetWSEnabledCompanyListResult)
    {
      $this->GetWSEnabledCompanyListResult = $GetWSEnabledCompanyListResult;
    }

    /**
     * @return ArrayOfCompany
     */
    public function getGetWSEnabledCompanyListResult()
    {
      return $this->GetWSEnabledCompanyListResult;
    }

    /**
     * @param ArrayOfCompany $GetWSEnabledCompanyListResult
     * @return GetWSEnabledCompanyListResponse
     */
    public function setGetWSEnabledCompanyListResult($GetWSEnabledCompanyListResult)
    {
      $this->GetWSEnabledCompanyListResult = $GetWSEnabledCompanyListResult;
      return $this;
    }

}
