<?php

class GetApplicantEducationListResponse
{

    /**
     * @var ArrayOfApplicantEducation $GetApplicantEducationListResult
     */
    protected $GetApplicantEducationListResult = null;

    /**
     * @param ArrayOfApplicantEducation $GetApplicantEducationListResult
     */
    public function __construct($GetApplicantEducationListResult)
    {
      $this->GetApplicantEducationListResult = $GetApplicantEducationListResult;
    }

    /**
     * @return ArrayOfApplicantEducation
     */
    public function getGetApplicantEducationListResult()
    {
      return $this->GetApplicantEducationListResult;
    }

    /**
     * @param ArrayOfApplicantEducation $GetApplicantEducationListResult
     * @return GetApplicantEducationListResponse
     */
    public function setGetApplicantEducationListResult($GetApplicantEducationListResult)
    {
      $this->GetApplicantEducationListResult = $GetApplicantEducationListResult;
      return $this;
    }

}
