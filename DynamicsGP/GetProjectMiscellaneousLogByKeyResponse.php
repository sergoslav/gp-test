<?php

class GetProjectMiscellaneousLogByKeyResponse
{

    /**
     * @var ProjectMiscellaneousLog $GetProjectMiscellaneousLogByKeyResult
     */
    protected $GetProjectMiscellaneousLogByKeyResult = null;

    /**
     * @param ProjectMiscellaneousLog $GetProjectMiscellaneousLogByKeyResult
     */
    public function __construct($GetProjectMiscellaneousLogByKeyResult)
    {
      $this->GetProjectMiscellaneousLogByKeyResult = $GetProjectMiscellaneousLogByKeyResult;
    }

    /**
     * @return ProjectMiscellaneousLog
     */
    public function getGetProjectMiscellaneousLogByKeyResult()
    {
      return $this->GetProjectMiscellaneousLogByKeyResult;
    }

    /**
     * @param ProjectMiscellaneousLog $GetProjectMiscellaneousLogByKeyResult
     * @return GetProjectMiscellaneousLogByKeyResponse
     */
    public function setGetProjectMiscellaneousLogByKeyResult($GetProjectMiscellaneousLogByKeyResult)
    {
      $this->GetProjectMiscellaneousLogByKeyResult = $GetProjectMiscellaneousLogByKeyResult;
      return $this;
    }

}
