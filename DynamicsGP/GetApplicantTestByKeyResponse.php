<?php

class GetApplicantTestByKeyResponse
{

    /**
     * @var ApplicantTest $GetApplicantTestByKeyResult
     */
    protected $GetApplicantTestByKeyResult = null;

    /**
     * @param ApplicantTest $GetApplicantTestByKeyResult
     */
    public function __construct($GetApplicantTestByKeyResult)
    {
      $this->GetApplicantTestByKeyResult = $GetApplicantTestByKeyResult;
    }

    /**
     * @return ApplicantTest
     */
    public function getGetApplicantTestByKeyResult()
    {
      return $this->GetApplicantTestByKeyResult;
    }

    /**
     * @param ApplicantTest $GetApplicantTestByKeyResult
     * @return GetApplicantTestByKeyResponse
     */
    public function setGetApplicantTestByKeyResult($GetApplicantTestByKeyResult)
    {
      $this->GetApplicantTestByKeyResult = $GetApplicantTestByKeyResult;
      return $this;
    }

}
