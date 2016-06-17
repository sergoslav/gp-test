<?php

class GetApplicantApplicationByKeyResponse
{

    /**
     * @var ApplicantApplication $GetApplicantApplicationByKeyResult
     */
    protected $GetApplicantApplicationByKeyResult = null;

    /**
     * @param ApplicantApplication $GetApplicantApplicationByKeyResult
     */
    public function __construct($GetApplicantApplicationByKeyResult)
    {
      $this->GetApplicantApplicationByKeyResult = $GetApplicantApplicationByKeyResult;
    }

    /**
     * @return ApplicantApplication
     */
    public function getGetApplicantApplicationByKeyResult()
    {
      return $this->GetApplicantApplicationByKeyResult;
    }

    /**
     * @param ApplicantApplication $GetApplicantApplicationByKeyResult
     * @return GetApplicantApplicationByKeyResponse
     */
    public function setGetApplicantApplicationByKeyResult($GetApplicantApplicationByKeyResult)
    {
      $this->GetApplicantApplicationByKeyResult = $GetApplicantApplicationByKeyResult;
      return $this;
    }

}
