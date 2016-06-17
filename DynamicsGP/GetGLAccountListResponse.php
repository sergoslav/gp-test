<?php

class GetGLAccountListResponse
{

    /**
     * @var ArrayOfGLAccountSummary $GetGLAccountListResult
     */
    protected $GetGLAccountListResult = null;

    /**
     * @param ArrayOfGLAccountSummary $GetGLAccountListResult
     */
    public function __construct($GetGLAccountListResult)
    {
      $this->GetGLAccountListResult = $GetGLAccountListResult;
    }

    /**
     * @return ArrayOfGLAccountSummary
     */
    public function getGetGLAccountListResult()
    {
      return $this->GetGLAccountListResult;
    }

    /**
     * @param ArrayOfGLAccountSummary $GetGLAccountListResult
     * @return GetGLAccountListResponse
     */
    public function setGetGLAccountListResult($GetGLAccountListResult)
    {
      $this->GetGLAccountListResult = $GetGLAccountListResult;
      return $this;
    }

}
