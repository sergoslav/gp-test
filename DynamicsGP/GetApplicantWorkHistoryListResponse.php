<?php

class GetApplicantWorkHistoryListResponse
{

    /**
     * @var ArrayOfApplicantWorkHistory $GetApplicantWorkHistoryListResult
     */
    protected $GetApplicantWorkHistoryListResult = null;

    /**
     * @param ArrayOfApplicantWorkHistory $GetApplicantWorkHistoryListResult
     */
    public function __construct($GetApplicantWorkHistoryListResult)
    {
      $this->GetApplicantWorkHistoryListResult = $GetApplicantWorkHistoryListResult;
    }

    /**
     * @return ArrayOfApplicantWorkHistory
     */
    public function getGetApplicantWorkHistoryListResult()
    {
      return $this->GetApplicantWorkHistoryListResult;
    }

    /**
     * @param ArrayOfApplicantWorkHistory $GetApplicantWorkHistoryListResult
     * @return GetApplicantWorkHistoryListResponse
     */
    public function setGetApplicantWorkHistoryListResult($GetApplicantWorkHistoryListResult)
    {
      $this->GetApplicantWorkHistoryListResult = $GetApplicantWorkHistoryListResult;
      return $this;
    }

}
