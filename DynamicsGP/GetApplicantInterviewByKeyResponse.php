<?php

class GetApplicantInterviewByKeyResponse
{

    /**
     * @var ApplicantInterview $GetApplicantInterviewByKeyResult
     */
    protected $GetApplicantInterviewByKeyResult = null;

    /**
     * @param ApplicantInterview $GetApplicantInterviewByKeyResult
     */
    public function __construct($GetApplicantInterviewByKeyResult)
    {
      $this->GetApplicantInterviewByKeyResult = $GetApplicantInterviewByKeyResult;
    }

    /**
     * @return ApplicantInterview
     */
    public function getGetApplicantInterviewByKeyResult()
    {
      return $this->GetApplicantInterviewByKeyResult;
    }

    /**
     * @param ApplicantInterview $GetApplicantInterviewByKeyResult
     * @return GetApplicantInterviewByKeyResponse
     */
    public function setGetApplicantInterviewByKeyResult($GetApplicantInterviewByKeyResult)
    {
      $this->GetApplicantInterviewByKeyResult = $GetApplicantInterviewByKeyResult;
      return $this;
    }

}
