<?php

class GetProjectContractListResponse
{

    /**
     * @var ArrayOfProjectContractSummary $GetProjectContractListResult
     */
    protected $GetProjectContractListResult = null;

    /**
     * @param ArrayOfProjectContractSummary $GetProjectContractListResult
     */
    public function __construct($GetProjectContractListResult)
    {
      $this->GetProjectContractListResult = $GetProjectContractListResult;
    }

    /**
     * @return ArrayOfProjectContractSummary
     */
    public function getGetProjectContractListResult()
    {
      return $this->GetProjectContractListResult;
    }

    /**
     * @param ArrayOfProjectContractSummary $GetProjectContractListResult
     * @return GetProjectContractListResponse
     */
    public function setGetProjectContractListResult($GetProjectContractListResult)
    {
      $this->GetProjectContractListResult = $GetProjectContractListResult;
      return $this;
    }

}
