<?php

class GetApplicantEducationByKeyResponse
{

    /**
     * @var ApplicantEducation $GetApplicantEducationByKeyResult
     */
    protected $GetApplicantEducationByKeyResult = null;

    /**
     * @param ApplicantEducation $GetApplicantEducationByKeyResult
     */
    public function __construct($GetApplicantEducationByKeyResult)
    {
      $this->GetApplicantEducationByKeyResult = $GetApplicantEducationByKeyResult;
    }

    /**
     * @return ApplicantEducation
     */
    public function getGetApplicantEducationByKeyResult()
    {
      return $this->GetApplicantEducationByKeyResult;
    }

    /**
     * @param ApplicantEducation $GetApplicantEducationByKeyResult
     * @return GetApplicantEducationByKeyResponse
     */
    public function setGetApplicantEducationByKeyResult($GetApplicantEducationByKeyResult)
    {
      $this->GetApplicantEducationByKeyResult = $GetApplicantEducationByKeyResult;
      return $this;
    }

}
