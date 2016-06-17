<?php

class GetBusinessObjectSummaryListResponse
{

    /**
     * @var ArrayOfBusinessObjectSummary $GetBusinessObjectSummaryListResult
     */
    protected $GetBusinessObjectSummaryListResult = null;

    /**
     * @param ArrayOfBusinessObjectSummary $GetBusinessObjectSummaryListResult
     */
    public function __construct($GetBusinessObjectSummaryListResult)
    {
      $this->GetBusinessObjectSummaryListResult = $GetBusinessObjectSummaryListResult;
    }

    /**
     * @return ArrayOfBusinessObjectSummary
     */
    public function getGetBusinessObjectSummaryListResult()
    {
      return $this->GetBusinessObjectSummaryListResult;
    }

    /**
     * @param ArrayOfBusinessObjectSummary $GetBusinessObjectSummaryListResult
     * @return GetBusinessObjectSummaryListResponse
     */
    public function setGetBusinessObjectSummaryListResult($GetBusinessObjectSummaryListResult)
    {
      $this->GetBusinessObjectSummaryListResult = $GetBusinessObjectSummaryListResult;
      return $this;
    }

}
