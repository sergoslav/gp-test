<?php

class GetGLFixedAllocationAccountByKeyResponse
{

    /**
     * @var GLFixedAllocationAccount $GetGLFixedAllocationAccountByKeyResult
     */
    protected $GetGLFixedAllocationAccountByKeyResult = null;

    /**
     * @param GLFixedAllocationAccount $GetGLFixedAllocationAccountByKeyResult
     */
    public function __construct($GetGLFixedAllocationAccountByKeyResult)
    {
      $this->GetGLFixedAllocationAccountByKeyResult = $GetGLFixedAllocationAccountByKeyResult;
    }

    /**
     * @return GLFixedAllocationAccount
     */
    public function getGetGLFixedAllocationAccountByKeyResult()
    {
      return $this->GetGLFixedAllocationAccountByKeyResult;
    }

    /**
     * @param GLFixedAllocationAccount $GetGLFixedAllocationAccountByKeyResult
     * @return GetGLFixedAllocationAccountByKeyResponse
     */
    public function setGetGLFixedAllocationAccountByKeyResult($GetGLFixedAllocationAccountByKeyResult)
    {
      $this->GetGLFixedAllocationAccountByKeyResult = $GetGLFixedAllocationAccountByKeyResult;
      return $this;
    }

}
