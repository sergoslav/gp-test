<?php

class GetGLPostingAccountByKeyResponse
{

    /**
     * @var GLPostingAccount $GetGLPostingAccountByKeyResult
     */
    protected $GetGLPostingAccountByKeyResult = null;

    /**
     * @param GLPostingAccount $GetGLPostingAccountByKeyResult
     */
    public function __construct($GetGLPostingAccountByKeyResult)
    {
      $this->GetGLPostingAccountByKeyResult = $GetGLPostingAccountByKeyResult;
    }

    /**
     * @return GLPostingAccount
     */
    public function getGetGLPostingAccountByKeyResult()
    {
      return $this->GetGLPostingAccountByKeyResult;
    }

    /**
     * @param GLPostingAccount $GetGLPostingAccountByKeyResult
     * @return GetGLPostingAccountByKeyResponse
     */
    public function setGetGLPostingAccountByKeyResult($GetGLPostingAccountByKeyResult)
    {
      $this->GetGLPostingAccountByKeyResult = $GetGLPostingAccountByKeyResult;
      return $this;
    }

}
