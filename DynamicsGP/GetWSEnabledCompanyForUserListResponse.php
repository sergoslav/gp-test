<?php

class GetWSEnabledCompanyForUserListResponse
{

    /**
     * @var ArrayOfCompany $GetWSEnabledCompanyForUserListResult
     */
    protected $GetWSEnabledCompanyForUserListResult = null;

    /**
     * @param ArrayOfCompany $GetWSEnabledCompanyForUserListResult
     */
    public function __construct($GetWSEnabledCompanyForUserListResult)
    {
      $this->GetWSEnabledCompanyForUserListResult = $GetWSEnabledCompanyForUserListResult;
    }

    /**
     * @return ArrayOfCompany
     */
    public function getGetWSEnabledCompanyForUserListResult()
    {
      return $this->GetWSEnabledCompanyForUserListResult;
    }

    /**
     * @param ArrayOfCompany $GetWSEnabledCompanyForUserListResult
     * @return GetWSEnabledCompanyForUserListResponse
     */
    public function setGetWSEnabledCompanyForUserListResult($GetWSEnabledCompanyForUserListResult)
    {
      $this->GetWSEnabledCompanyForUserListResult = $GetWSEnabledCompanyForUserListResult;
      return $this;
    }

}
