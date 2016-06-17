<?php

class GetPolicyListByRoleKeyResponse
{

    /**
     * @var ArrayOfPolicySummary $GetPolicyListByRoleKeyResult
     */
    protected $GetPolicyListByRoleKeyResult = null;

    /**
     * @param ArrayOfPolicySummary $GetPolicyListByRoleKeyResult
     */
    public function __construct($GetPolicyListByRoleKeyResult)
    {
      $this->GetPolicyListByRoleKeyResult = $GetPolicyListByRoleKeyResult;
    }

    /**
     * @return ArrayOfPolicySummary
     */
    public function getGetPolicyListByRoleKeyResult()
    {
      return $this->GetPolicyListByRoleKeyResult;
    }

    /**
     * @param ArrayOfPolicySummary $GetPolicyListByRoleKeyResult
     * @return GetPolicyListByRoleKeyResponse
     */
    public function setGetPolicyListByRoleKeyResult($GetPolicyListByRoleKeyResult)
    {
      $this->GetPolicyListByRoleKeyResult = $GetPolicyListByRoleKeyResult;
      return $this;
    }

}
