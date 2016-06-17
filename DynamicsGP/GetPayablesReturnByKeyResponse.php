<?php

class GetPayablesReturnByKeyResponse
{

    /**
     * @var PayablesReturn $GetPayablesReturnByKeyResult
     */
    protected $GetPayablesReturnByKeyResult = null;

    /**
     * @param PayablesReturn $GetPayablesReturnByKeyResult
     */
    public function __construct($GetPayablesReturnByKeyResult)
    {
      $this->GetPayablesReturnByKeyResult = $GetPayablesReturnByKeyResult;
    }

    /**
     * @return PayablesReturn
     */
    public function getGetPayablesReturnByKeyResult()
    {
      return $this->GetPayablesReturnByKeyResult;
    }

    /**
     * @param PayablesReturn $GetPayablesReturnByKeyResult
     * @return GetPayablesReturnByKeyResponse
     */
    public function setGetPayablesReturnByKeyResult($GetPayablesReturnByKeyResult)
    {
      $this->GetPayablesReturnByKeyResult = $GetPayablesReturnByKeyResult;
      return $this;
    }

}
