<?php

class GetProjectListResponse
{

    /**
     * @var ArrayOfProjectSummary $GetProjectListResult
     */
    protected $GetProjectListResult = null;

    /**
     * @param ArrayOfProjectSummary $GetProjectListResult
     */
    public function __construct($GetProjectListResult)
    {
      $this->GetProjectListResult = $GetProjectListResult;
    }

    /**
     * @return ArrayOfProjectSummary
     */
    public function getGetProjectListResult()
    {
      return $this->GetProjectListResult;
    }

    /**
     * @param ArrayOfProjectSummary $GetProjectListResult
     * @return GetProjectListResponse
     */
    public function setGetProjectListResult($GetProjectListResult)
    {
      $this->GetProjectListResult = $GetProjectListResult;
      return $this;
    }

}
