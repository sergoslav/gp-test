<?php

class GetApplicantTestListResponse
{

    /**
     * @var ArrayOfApplicantTest $GetApplicantTestListResult
     */
    protected $GetApplicantTestListResult = null;

    /**
     * @param ArrayOfApplicantTest $GetApplicantTestListResult
     */
    public function __construct($GetApplicantTestListResult)
    {
      $this->GetApplicantTestListResult = $GetApplicantTestListResult;
    }

    /**
     * @return ArrayOfApplicantTest
     */
    public function getGetApplicantTestListResult()
    {
      return $this->GetApplicantTestListResult;
    }

    /**
     * @param ArrayOfApplicantTest $GetApplicantTestListResult
     * @return GetApplicantTestListResponse
     */
    public function setGetApplicantTestListResult($GetApplicantTestListResult)
    {
      $this->GetApplicantTestListResult = $GetApplicantTestListResult;
      return $this;
    }

}
