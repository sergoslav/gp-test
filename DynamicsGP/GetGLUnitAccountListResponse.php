<?php

class GetGLUnitAccountListResponse
{

    /**
     * @var ArrayOfGLUnitAccountSummary $GetGLUnitAccountListResult
     */
    protected $GetGLUnitAccountListResult = null;

    /**
     * @param ArrayOfGLUnitAccountSummary $GetGLUnitAccountListResult
     */
    public function __construct($GetGLUnitAccountListResult)
    {
      $this->GetGLUnitAccountListResult = $GetGLUnitAccountListResult;
    }

    /**
     * @return ArrayOfGLUnitAccountSummary
     */
    public function getGetGLUnitAccountListResult()
    {
      return $this->GetGLUnitAccountListResult;
    }

    /**
     * @param ArrayOfGLUnitAccountSummary $GetGLUnitAccountListResult
     * @return GetGLUnitAccountListResponse
     */
    public function setGetGLUnitAccountListResult($GetGLUnitAccountListResult)
    {
      $this->GetGLUnitAccountListResult = $GetGLUnitAccountListResult;
      return $this;
    }

}
