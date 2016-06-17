<?php

class GetServiceCallListResponse
{

    /**
     * @var ArrayOfServiceCallSummary $GetServiceCallListResult
     */
    protected $GetServiceCallListResult = null;

    /**
     * @param ArrayOfServiceCallSummary $GetServiceCallListResult
     */
    public function __construct($GetServiceCallListResult)
    {
      $this->GetServiceCallListResult = $GetServiceCallListResult;
    }

    /**
     * @return ArrayOfServiceCallSummary
     */
    public function getGetServiceCallListResult()
    {
      return $this->GetServiceCallListResult;
    }

    /**
     * @param ArrayOfServiceCallSummary $GetServiceCallListResult
     * @return GetServiceCallListResponse
     */
    public function setGetServiceCallListResult($GetServiceCallListResult)
    {
      $this->GetServiceCallListResult = $GetServiceCallListResult;
      return $this;
    }

}
