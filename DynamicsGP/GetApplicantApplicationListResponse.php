<?php

class GetApplicantApplicationListResponse
{

    /**
     * @var ArrayOfApplicantApplicationSummary $GetApplicantApplicationListResult
     */
    protected $GetApplicantApplicationListResult = null;

    /**
     * @param ArrayOfApplicantApplicationSummary $GetApplicantApplicationListResult
     */
    public function __construct($GetApplicantApplicationListResult)
    {
      $this->GetApplicantApplicationListResult = $GetApplicantApplicationListResult;
    }

    /**
     * @return ArrayOfApplicantApplicationSummary
     */
    public function getGetApplicantApplicationListResult()
    {
      return $this->GetApplicantApplicationListResult;
    }

    /**
     * @param ArrayOfApplicantApplicationSummary $GetApplicantApplicationListResult
     * @return GetApplicantApplicationListResponse
     */
    public function setGetApplicantApplicationListResult($GetApplicantApplicationListResult)
    {
      $this->GetApplicantApplicationListResult = $GetApplicantApplicationListResult;
      return $this;
    }

}
