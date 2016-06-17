<?php

class GetPayablesReturnListResponse
{

    /**
     * @var ArrayOfPayablesReturnSummary $GetPayablesReturnListResult
     */
    protected $GetPayablesReturnListResult = null;

    /**
     * @param ArrayOfPayablesReturnSummary $GetPayablesReturnListResult
     */
    public function __construct($GetPayablesReturnListResult)
    {
      $this->GetPayablesReturnListResult = $GetPayablesReturnListResult;
    }

    /**
     * @return ArrayOfPayablesReturnSummary
     */
    public function getGetPayablesReturnListResult()
    {
      return $this->GetPayablesReturnListResult;
    }

    /**
     * @param ArrayOfPayablesReturnSummary $GetPayablesReturnListResult
     * @return GetPayablesReturnListResponse
     */
    public function setGetPayablesReturnListResult($GetPayablesReturnListResult)
    {
      $this->GetPayablesReturnListResult = $GetPayablesReturnListResult;
      return $this;
    }

}
