<?php

class GetGLVariableAllocationAccountByKeyResponse
{

    /**
     * @var GLVariableAllocationAccount $GetGLVariableAllocationAccountByKeyResult
     */
    protected $GetGLVariableAllocationAccountByKeyResult = null;

    /**
     * @param GLVariableAllocationAccount $GetGLVariableAllocationAccountByKeyResult
     */
    public function __construct($GetGLVariableAllocationAccountByKeyResult)
    {
      $this->GetGLVariableAllocationAccountByKeyResult = $GetGLVariableAllocationAccountByKeyResult;
    }

    /**
     * @return GLVariableAllocationAccount
     */
    public function getGetGLVariableAllocationAccountByKeyResult()
    {
      return $this->GetGLVariableAllocationAccountByKeyResult;
    }

    /**
     * @param GLVariableAllocationAccount $GetGLVariableAllocationAccountByKeyResult
     * @return GetGLVariableAllocationAccountByKeyResponse
     */
    public function setGetGLVariableAllocationAccountByKeyResult($GetGLVariableAllocationAccountByKeyResult)
    {
      $this->GetGLVariableAllocationAccountByKeyResult = $GetGLVariableAllocationAccountByKeyResult;
      return $this;
    }

}
