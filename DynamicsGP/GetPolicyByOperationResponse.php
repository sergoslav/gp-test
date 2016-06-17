<?php

class GetPolicyByOperationResponse
{

    /**
     * @var Policy $GetPolicyByOperationResult
     */
    protected $GetPolicyByOperationResult = null;

    /**
     * @param Policy $GetPolicyByOperationResult
     */
    public function __construct($GetPolicyByOperationResult)
    {
      $this->GetPolicyByOperationResult = $GetPolicyByOperationResult;
    }

    /**
     * @return Policy
     */
    public function getGetPolicyByOperationResult()
    {
      return $this->GetPolicyByOperationResult;
    }

    /**
     * @param Policy $GetPolicyByOperationResult
     * @return GetPolicyByOperationResponse
     */
    public function setGetPolicyByOperationResult($GetPolicyByOperationResult)
    {
      $this->GetPolicyByOperationResult = $GetPolicyByOperationResult;
      return $this;
    }

}
