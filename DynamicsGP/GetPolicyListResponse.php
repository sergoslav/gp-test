<?php

class GetPolicyListResponse
{

    /**
     * @var ArrayOfPolicySummary $GetPolicyListResult
     */
    protected $GetPolicyListResult = null;

    /**
     * @param ArrayOfPolicySummary $GetPolicyListResult
     */
    public function __construct($GetPolicyListResult)
    {
      $this->GetPolicyListResult = $GetPolicyListResult;
    }

    /**
     * @return ArrayOfPolicySummary
     */
    public function getGetPolicyListResult()
    {
      return $this->GetPolicyListResult;
    }

    /**
     * @param ArrayOfPolicySummary $GetPolicyListResult
     * @return GetPolicyListResponse
     */
    public function setGetPolicyListResult($GetPolicyListResult)
    {
      $this->GetPolicyListResult = $GetPolicyListResult;
      return $this;
    }

}
