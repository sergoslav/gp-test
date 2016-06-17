<?php

class GetServiceListResponse
{

    /**
     * @var ArrayOfServiceSummary $GetServiceListResult
     */
    protected $GetServiceListResult = null;

    /**
     * @param ArrayOfServiceSummary $GetServiceListResult
     */
    public function __construct($GetServiceListResult)
    {
      $this->GetServiceListResult = $GetServiceListResult;
    }

    /**
     * @return ArrayOfServiceSummary
     */
    public function getGetServiceListResult()
    {
      return $this->GetServiceListResult;
    }

    /**
     * @param ArrayOfServiceSummary $GetServiceListResult
     * @return GetServiceListResponse
     */
    public function setGetServiceListResult($GetServiceListResult)
    {
      $this->GetServiceListResult = $GetServiceListResult;
      return $this;
    }

}
