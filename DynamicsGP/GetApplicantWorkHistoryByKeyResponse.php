<?php

class GetApplicantWorkHistoryByKeyResponse
{

    /**
     * @var ApplicantWorkHistory $GetApplicantWorkHistoryByKeyResult
     */
    protected $GetApplicantWorkHistoryByKeyResult = null;

    /**
     * @param ApplicantWorkHistory $GetApplicantWorkHistoryByKeyResult
     */
    public function __construct($GetApplicantWorkHistoryByKeyResult)
    {
      $this->GetApplicantWorkHistoryByKeyResult = $GetApplicantWorkHistoryByKeyResult;
    }

    /**
     * @return ApplicantWorkHistory
     */
    public function getGetApplicantWorkHistoryByKeyResult()
    {
      return $this->GetApplicantWorkHistoryByKeyResult;
    }

    /**
     * @param ApplicantWorkHistory $GetApplicantWorkHistoryByKeyResult
     * @return GetApplicantWorkHistoryByKeyResponse
     */
    public function setGetApplicantWorkHistoryByKeyResult($GetApplicantWorkHistoryByKeyResult)
    {
      $this->GetApplicantWorkHistoryByKeyResult = $GetApplicantWorkHistoryByKeyResult;
      return $this;
    }

}
