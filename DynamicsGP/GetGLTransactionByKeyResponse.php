<?php

class GetGLTransactionByKeyResponse
{

    /**
     * @var GLTransaction $GetGLTransactionByKeyResult
     */
    protected $GetGLTransactionByKeyResult = null;

    /**
     * @param GLTransaction $GetGLTransactionByKeyResult
     */
    public function __construct($GetGLTransactionByKeyResult)
    {
      $this->GetGLTransactionByKeyResult = $GetGLTransactionByKeyResult;
    }

    /**
     * @return GLTransaction
     */
    public function getGetGLTransactionByKeyResult()
    {
      return $this->GetGLTransactionByKeyResult;
    }

    /**
     * @param GLTransaction $GetGLTransactionByKeyResult
     * @return GetGLTransactionByKeyResponse
     */
    public function setGetGLTransactionByKeyResult($GetGLTransactionByKeyResult)
    {
      $this->GetGLTransactionByKeyResult = $GetGLTransactionByKeyResult;
      return $this;
    }

}
