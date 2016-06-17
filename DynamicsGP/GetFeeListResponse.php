<?php

class GetFeeListResponse
{

    /**
     * @var ArrayOfFeeSummary $GetFeeListResult
     */
    protected $GetFeeListResult = null;

    /**
     * @param ArrayOfFeeSummary $GetFeeListResult
     */
    public function __construct($GetFeeListResult)
    {
      $this->GetFeeListResult = $GetFeeListResult;
    }

    /**
     * @return ArrayOfFeeSummary
     */
    public function getGetFeeListResult()
    {
      return $this->GetFeeListResult;
    }

    /**
     * @param ArrayOfFeeSummary $GetFeeListResult
     * @return GetFeeListResponse
     */
    public function setGetFeeListResult($GetFeeListResult)
    {
      $this->GetFeeListResult = $GetFeeListResult;
      return $this;
    }

}
