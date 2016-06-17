<?php

class GetProjectMiscellaneousLogListResponse
{

    /**
     * @var ArrayOfProjectMiscellaneousLogSummary $GetProjectMiscellaneousLogListResult
     */
    protected $GetProjectMiscellaneousLogListResult = null;

    /**
     * @param ArrayOfProjectMiscellaneousLogSummary $GetProjectMiscellaneousLogListResult
     */
    public function __construct($GetProjectMiscellaneousLogListResult)
    {
      $this->GetProjectMiscellaneousLogListResult = $GetProjectMiscellaneousLogListResult;
    }

    /**
     * @return ArrayOfProjectMiscellaneousLogSummary
     */
    public function getGetProjectMiscellaneousLogListResult()
    {
      return $this->GetProjectMiscellaneousLogListResult;
    }

    /**
     * @param ArrayOfProjectMiscellaneousLogSummary $GetProjectMiscellaneousLogListResult
     * @return GetProjectMiscellaneousLogListResponse
     */
    public function setGetProjectMiscellaneousLogListResult($GetProjectMiscellaneousLogListResult)
    {
      $this->GetProjectMiscellaneousLogListResult = $GetProjectMiscellaneousLogListResult;
      return $this;
    }

}
