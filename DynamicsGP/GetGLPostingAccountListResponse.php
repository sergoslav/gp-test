<?php

class GetGLPostingAccountListResponse
{

    /**
     * @var ArrayOfGLPostingAccountSummary $GetGLPostingAccountListResult
     */
    protected $GetGLPostingAccountListResult = null;

    /**
     * @param ArrayOfGLPostingAccountSummary $GetGLPostingAccountListResult
     */
    public function __construct($GetGLPostingAccountListResult)
    {
      $this->GetGLPostingAccountListResult = $GetGLPostingAccountListResult;
    }

    /**
     * @return ArrayOfGLPostingAccountSummary
     */
    public function getGetGLPostingAccountListResult()
    {
      return $this->GetGLPostingAccountListResult;
    }

    /**
     * @param ArrayOfGLPostingAccountSummary $GetGLPostingAccountListResult
     * @return GetGLPostingAccountListResponse
     */
    public function setGetGLPostingAccountListResult($GetGLPostingAccountListResult)
    {
      $this->GetGLPostingAccountListResult = $GetGLPostingAccountListResult;
      return $this;
    }

}
