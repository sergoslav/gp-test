<?php

class GetGLAccountByKeyResponse
{

    /**
     * @var GLAccount $GetGLAccountByKeyResult
     */
    protected $GetGLAccountByKeyResult = null;

    /**
     * @param GLAccount $GetGLAccountByKeyResult
     */
    public function __construct($GetGLAccountByKeyResult)
    {
      $this->GetGLAccountByKeyResult = $GetGLAccountByKeyResult;
    }

    /**
     * @return GLAccount
     */
    public function getGetGLAccountByKeyResult()
    {
      return $this->GetGLAccountByKeyResult;
    }

    /**
     * @param GLAccount $GetGLAccountByKeyResult
     * @return GetGLAccountByKeyResponse
     */
    public function setGetGLAccountByKeyResult($GetGLAccountByKeyResult)
    {
      $this->GetGLAccountByKeyResult = $GetGLAccountByKeyResult;
      return $this;
    }

}
