<?php

class GetApplicantInterviewListResponse
{

    /**
     * @var ArrayOfApplicantInterviewSummary $GetApplicantInterviewListResult
     */
    protected $GetApplicantInterviewListResult = null;

    /**
     * @param ArrayOfApplicantInterviewSummary $GetApplicantInterviewListResult
     */
    public function __construct($GetApplicantInterviewListResult)
    {
      $this->GetApplicantInterviewListResult = $GetApplicantInterviewListResult;
    }

    /**
     * @return ArrayOfApplicantInterviewSummary
     */
    public function getGetApplicantInterviewListResult()
    {
      return $this->GetApplicantInterviewListResult;
    }

    /**
     * @param ArrayOfApplicantInterviewSummary $GetApplicantInterviewListResult
     * @return GetApplicantInterviewListResponse
     */
    public function setGetApplicantInterviewListResult($GetApplicantInterviewListResult)
    {
      $this->GetApplicantInterviewListResult = $GetApplicantInterviewListResult;
      return $this;
    }

}
