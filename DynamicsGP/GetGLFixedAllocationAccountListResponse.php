<?php

class GetGLFixedAllocationAccountListResponse
{

    /**
     * @var ArrayOfGLFixedAllocationAccountSummary $GetGLFixedAllocationAccountListResult
     */
    protected $GetGLFixedAllocationAccountListResult = null;

    /**
     * @param ArrayOfGLFixedAllocationAccountSummary $GetGLFixedAllocationAccountListResult
     */
    public function __construct($GetGLFixedAllocationAccountListResult)
    {
      $this->GetGLFixedAllocationAccountListResult = $GetGLFixedAllocationAccountListResult;
    }

    /**
     * @return ArrayOfGLFixedAllocationAccountSummary
     */
    public function getGetGLFixedAllocationAccountListResult()
    {
      return $this->GetGLFixedAllocationAccountListResult;
    }

    /**
     * @param ArrayOfGLFixedAllocationAccountSummary $GetGLFixedAllocationAccountListResult
     * @return GetGLFixedAllocationAccountListResponse
     */
    public function setGetGLFixedAllocationAccountListResult($GetGLFixedAllocationAccountListResult)
    {
      $this->GetGLFixedAllocationAccountListResult = $GetGLFixedAllocationAccountListResult;
      return $this;
    }

}
