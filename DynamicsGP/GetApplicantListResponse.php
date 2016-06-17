<?php

class GetApplicantListResponse
{

    /**
     * @var ArrayOfApplicantSummary $GetApplicantListResult
     */
    protected $GetApplicantListResult = null;

    /**
     * @param ArrayOfApplicantSummary $GetApplicantListResult
     */
    public function __construct($GetApplicantListResult)
    {
      $this->GetApplicantListResult = $GetApplicantListResult;
    }

    /**
     * @return ArrayOfApplicantSummary
     */
    public function getGetApplicantListResult()
    {
      return $this->GetApplicantListResult;
    }

    /**
     * @param ArrayOfApplicantSummary $GetApplicantListResult
     * @return GetApplicantListResponse
     */
    public function setGetApplicantListResult($GetApplicantListResult)
    {
      $this->GetApplicantListResult = $GetApplicantListResult;
      return $this;
    }

}
