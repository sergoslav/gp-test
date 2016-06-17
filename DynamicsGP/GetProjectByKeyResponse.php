<?php

class GetProjectByKeyResponse
{

    /**
     * @var Project $GetProjectByKeyResult
     */
    protected $GetProjectByKeyResult = null;

    /**
     * @param Project $GetProjectByKeyResult
     */
    public function __construct($GetProjectByKeyResult)
    {
      $this->GetProjectByKeyResult = $GetProjectByKeyResult;
    }

    /**
     * @return Project
     */
    public function getGetProjectByKeyResult()
    {
      return $this->GetProjectByKeyResult;
    }

    /**
     * @param Project $GetProjectByKeyResult
     * @return GetProjectByKeyResponse
     */
    public function setGetProjectByKeyResult($GetProjectByKeyResult)
    {
      $this->GetProjectByKeyResult = $GetProjectByKeyResult;
      return $this;
    }

}
