<?php

class GetApplicantReferenceByKeyResponse
{

    /**
     * @var ApplicantReference $GetApplicantReferenceByKeyResult
     */
    protected $GetApplicantReferenceByKeyResult = null;

    /**
     * @param ApplicantReference $GetApplicantReferenceByKeyResult
     */
    public function __construct($GetApplicantReferenceByKeyResult)
    {
      $this->GetApplicantReferenceByKeyResult = $GetApplicantReferenceByKeyResult;
    }

    /**
     * @return ApplicantReference
     */
    public function getGetApplicantReferenceByKeyResult()
    {
      return $this->GetApplicantReferenceByKeyResult;
    }

    /**
     * @param ApplicantReference $GetApplicantReferenceByKeyResult
     * @return GetApplicantReferenceByKeyResponse
     */
    public function setGetApplicantReferenceByKeyResult($GetApplicantReferenceByKeyResult)
    {
      $this->GetApplicantReferenceByKeyResult = $GetApplicantReferenceByKeyResult;
      return $this;
    }

}
