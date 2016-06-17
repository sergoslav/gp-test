<?php

class GetGLVariableAllocationAccountListResponse
{

    /**
     * @var ArrayOfGLVariableAllocationAccountSummary $GetGLVariableAllocationAccountListResult
     */
    protected $GetGLVariableAllocationAccountListResult = null;

    /**
     * @param ArrayOfGLVariableAllocationAccountSummary $GetGLVariableAllocationAccountListResult
     */
    public function __construct($GetGLVariableAllocationAccountListResult)
    {
      $this->GetGLVariableAllocationAccountListResult = $GetGLVariableAllocationAccountListResult;
    }

    /**
     * @return ArrayOfGLVariableAllocationAccountSummary
     */
    public function getGetGLVariableAllocationAccountListResult()
    {
      return $this->GetGLVariableAllocationAccountListResult;
    }

    /**
     * @param ArrayOfGLVariableAllocationAccountSummary $GetGLVariableAllocationAccountListResult
     * @return GetGLVariableAllocationAccountListResponse
     */
    public function setGetGLVariableAllocationAccountListResult($GetGLVariableAllocationAccountListResult)
    {
      $this->GetGLVariableAllocationAccountListResult = $GetGLVariableAllocationAccountListResult;
      return $this;
    }

}
