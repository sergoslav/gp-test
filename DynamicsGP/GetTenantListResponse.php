<?php

class GetTenantListResponse
{

    /**
     * @var ArrayOfTenant $GetTenantListResult
     */
    protected $GetTenantListResult = null;

    /**
     * @param ArrayOfTenant $GetTenantListResult
     */
    public function __construct($GetTenantListResult)
    {
      $this->GetTenantListResult = $GetTenantListResult;
    }

    /**
     * @return ArrayOfTenant
     */
    public function getGetTenantListResult()
    {
      return $this->GetTenantListResult;
    }

    /**
     * @param ArrayOfTenant $GetTenantListResult
     * @return GetTenantListResponse
     */
    public function setGetTenantListResult($GetTenantListResult)
    {
      $this->GetTenantListResult = $GetTenantListResult;
      return $this;
    }

}
