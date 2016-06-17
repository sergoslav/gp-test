<?php

class GetCompletePolicyByKeyResponse
{

    /**
     * @var Policy $GetCompletePolicyByKeyResult
     */
    protected $GetCompletePolicyByKeyResult = null;

    /**
     * @param Policy $GetCompletePolicyByKeyResult
     */
    public function __construct($GetCompletePolicyByKeyResult)
    {
      $this->GetCompletePolicyByKeyResult = $GetCompletePolicyByKeyResult;
    }

    /**
     * @return Policy
     */
    public function getGetCompletePolicyByKeyResult()
    {
      return $this->GetCompletePolicyByKeyResult;
    }

    /**
     * @param Policy $GetCompletePolicyByKeyResult
     * @return GetCompletePolicyByKeyResponse
     */
    public function setGetCompletePolicyByKeyResult($GetCompletePolicyByKeyResult)
    {
      $this->GetCompletePolicyByKeyResult = $GetCompletePolicyByKeyResult;
      return $this;
    }

}
