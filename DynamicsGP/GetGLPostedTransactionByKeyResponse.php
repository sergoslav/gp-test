<?php

class GetGLPostedTransactionByKeyResponse
{

    /**
     * @var GLTransaction $GetGLPostedTransactionByKeyResult
     */
    protected $GetGLPostedTransactionByKeyResult = null;

    /**
     * @param GLTransaction $GetGLPostedTransactionByKeyResult
     */
    public function __construct($GetGLPostedTransactionByKeyResult)
    {
      $this->GetGLPostedTransactionByKeyResult = $GetGLPostedTransactionByKeyResult;
    }

    /**
     * @return GLTransaction
     */
    public function getGetGLPostedTransactionByKeyResult()
    {
      return $this->GetGLPostedTransactionByKeyResult;
    }

    /**
     * @param GLTransaction $GetGLPostedTransactionByKeyResult
     * @return GetGLPostedTransactionByKeyResponse
     */
    public function setGetGLPostedTransactionByKeyResult($GetGLPostedTransactionByKeyResult)
    {
      $this->GetGLPostedTransactionByKeyResult = $GetGLPostedTransactionByKeyResult;
      return $this;
    }

}
