<?php

class GetGLTransactionListResponse
{

    /**
     * @var ArrayOfGLTransactionSummary $GetGLTransactionListResult
     */
    protected $GetGLTransactionListResult = null;

    /**
     * @param ArrayOfGLTransactionSummary $GetGLTransactionListResult
     */
    public function __construct($GetGLTransactionListResult)
    {
      $this->GetGLTransactionListResult = $GetGLTransactionListResult;
    }

    /**
     * @return ArrayOfGLTransactionSummary
     */
    public function getGetGLTransactionListResult()
    {
      return $this->GetGLTransactionListResult;
    }

    /**
     * @param ArrayOfGLTransactionSummary $GetGLTransactionListResult
     * @return GetGLTransactionListResponse
     */
    public function setGetGLTransactionListResult($GetGLTransactionListResult)
    {
      $this->GetGLTransactionListResult = $GetGLTransactionListResult;
      return $this;
    }

}
