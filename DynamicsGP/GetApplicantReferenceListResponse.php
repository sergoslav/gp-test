<?php

class GetApplicantReferenceListResponse
{

    /**
     * @var ArrayOfApplicantReferenceSummary $GetApplicantReferenceListResult
     */
    protected $GetApplicantReferenceListResult = null;

    /**
     * @param ArrayOfApplicantReferenceSummary $GetApplicantReferenceListResult
     */
    public function __construct($GetApplicantReferenceListResult)
    {
      $this->GetApplicantReferenceListResult = $GetApplicantReferenceListResult;
    }

    /**
     * @return ArrayOfApplicantReferenceSummary
     */
    public function getGetApplicantReferenceListResult()
    {
      return $this->GetApplicantReferenceListResult;
    }

    /**
     * @param ArrayOfApplicantReferenceSummary $GetApplicantReferenceListResult
     * @return GetApplicantReferenceListResponse
     */
    public function setGetApplicantReferenceListResult($GetApplicantReferenceListResult)
    {
      $this->GetApplicantReferenceListResult = $GetApplicantReferenceListResult;
      return $this;
    }

}
