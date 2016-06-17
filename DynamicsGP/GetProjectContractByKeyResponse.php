<?php

class GetProjectContractByKeyResponse
{

    /**
     * @var ProjectContract $GetProjectContractByKeyResult
     */
    protected $GetProjectContractByKeyResult = null;

    /**
     * @param ProjectContract $GetProjectContractByKeyResult
     */
    public function __construct($GetProjectContractByKeyResult)
    {
      $this->GetProjectContractByKeyResult = $GetProjectContractByKeyResult;
    }

    /**
     * @return ProjectContract
     */
    public function getGetProjectContractByKeyResult()
    {
      return $this->GetProjectContractByKeyResult;
    }

    /**
     * @param ProjectContract $GetProjectContractByKeyResult
     * @return GetProjectContractByKeyResponse
     */
    public function setGetProjectContractByKeyResult($GetProjectContractByKeyResult)
    {
      $this->GetProjectContractByKeyResult = $GetProjectContractByKeyResult;
      return $this;
    }

}
