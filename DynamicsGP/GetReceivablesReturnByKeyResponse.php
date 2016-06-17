<?php

class GetReceivablesReturnByKeyResponse
{

    /**
     * @var ReceivablesReturn $GetReceivablesReturnByKeyResult
     */
    protected $GetReceivablesReturnByKeyResult = null;

    /**
     * @param ReceivablesReturn $GetReceivablesReturnByKeyResult
     */
    public function __construct($GetReceivablesReturnByKeyResult)
    {
      $this->GetReceivablesReturnByKeyResult = $GetReceivablesReturnByKeyResult;
    }

    /**
     * @return ReceivablesReturn
     */
    public function getGetReceivablesReturnByKeyResult()
    {
      return $this->GetReceivablesReturnByKeyResult;
    }

    /**
     * @param ReceivablesReturn $GetReceivablesReturnByKeyResult
     * @return GetReceivablesReturnByKeyResponse
     */
    public function setGetReceivablesReturnByKeyResult($GetReceivablesReturnByKeyResult)
    {
      $this->GetReceivablesReturnByKeyResult = $GetReceivablesReturnByKeyResult;
      return $this;
    }

}
