<?php

class GetPolicyByKeyResponse
{

    /**
     * @var Policy $GetPolicyByKeyResult
     */
    protected $GetPolicyByKeyResult = null;

    /**
     * @param Policy $GetPolicyByKeyResult
     */
    public function __construct($GetPolicyByKeyResult)
    {
      $this->GetPolicyByKeyResult = $GetPolicyByKeyResult;
    }

    /**
     * @return Policy
     */
    public function getGetPolicyByKeyResult()
    {
      return $this->GetPolicyByKeyResult;
    }

    /**
     * @param Policy $GetPolicyByKeyResult
     * @return GetPolicyByKeyResponse
     */
    public function setGetPolicyByKeyResult($GetPolicyByKeyResult)
    {
      $this->GetPolicyByKeyResult = $GetPolicyByKeyResult;
      return $this;
    }

}
