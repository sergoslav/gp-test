<?php

class GetSalespersonCommissionsListResponse
{

    /**
     * @var ArrayOfSalespersonCommissionsSummary $GetSalespersonCommissionsListResult
     */
    protected $GetSalespersonCommissionsListResult = null;

    /**
     * @param ArrayOfSalespersonCommissionsSummary $GetSalespersonCommissionsListResult
     */
    public function __construct($GetSalespersonCommissionsListResult)
    {
      $this->GetSalespersonCommissionsListResult = $GetSalespersonCommissionsListResult;
    }

    /**
     * @return ArrayOfSalespersonCommissionsSummary
     */
    public function getGetSalespersonCommissionsListResult()
    {
      return $this->GetSalespersonCommissionsListResult;
    }

    /**
     * @param ArrayOfSalespersonCommissionsSummary $GetSalespersonCommissionsListResult
     * @return GetSalespersonCommissionsListResponse
     */
    public function setGetSalespersonCommissionsListResult($GetSalespersonCommissionsListResult)
    {
      $this->GetSalespersonCommissionsListResult = $GetSalespersonCommissionsListResult;
      return $this;
    }

}
