<?php

class GetApplicantByKeyResponse
{

    /**
     * @var Applicant $GetApplicantByKeyResult
     */
    protected $GetApplicantByKeyResult = null;

    /**
     * @param Applicant $GetApplicantByKeyResult
     */
    public function __construct($GetApplicantByKeyResult)
    {
      $this->GetApplicantByKeyResult = $GetApplicantByKeyResult;
    }

    /**
     * @return Applicant
     */
    public function getGetApplicantByKeyResult()
    {
      return $this->GetApplicantByKeyResult;
    }

    /**
     * @param Applicant $GetApplicantByKeyResult
     * @return GetApplicantByKeyResponse
     */
    public function setGetApplicantByKeyResult($GetApplicantByKeyResult)
    {
      $this->GetApplicantByKeyResult = $GetApplicantByKeyResult;
      return $this;
    }

}
