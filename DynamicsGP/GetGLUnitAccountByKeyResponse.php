<?php

class GetGLUnitAccountByKeyResponse
{

    /**
     * @var GLUnitAccount $GetGLUnitAccountByKeyResult
     */
    protected $GetGLUnitAccountByKeyResult = null;

    /**
     * @param GLUnitAccount $GetGLUnitAccountByKeyResult
     */
    public function __construct($GetGLUnitAccountByKeyResult)
    {
      $this->GetGLUnitAccountByKeyResult = $GetGLUnitAccountByKeyResult;
    }

    /**
     * @return GLUnitAccount
     */
    public function getGetGLUnitAccountByKeyResult()
    {
      return $this->GetGLUnitAccountByKeyResult;
    }

    /**
     * @param GLUnitAccount $GetGLUnitAccountByKeyResult
     * @return GetGLUnitAccountByKeyResponse
     */
    public function setGetGLUnitAccountByKeyResult($GetGLUnitAccountByKeyResult)
    {
      $this->GetGLUnitAccountByKeyResult = $GetGLUnitAccountByKeyResult;
      return $this;
    }

}
