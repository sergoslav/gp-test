<?php

class GetLoggedExceptionDataListResponse
{

    /**
     * @var ArrayOfLoggedExceptionDataSummary $GetLoggedExceptionDataListResult
     */
    protected $GetLoggedExceptionDataListResult = null;

    /**
     * @param ArrayOfLoggedExceptionDataSummary $GetLoggedExceptionDataListResult
     */
    public function __construct($GetLoggedExceptionDataListResult)
    {
      $this->GetLoggedExceptionDataListResult = $GetLoggedExceptionDataListResult;
    }

    /**
     * @return ArrayOfLoggedExceptionDataSummary
     */
    public function getGetLoggedExceptionDataListResult()
    {
      return $this->GetLoggedExceptionDataListResult;
    }

    /**
     * @param ArrayOfLoggedExceptionDataSummary $GetLoggedExceptionDataListResult
     * @return GetLoggedExceptionDataListResponse
     */
    public function setGetLoggedExceptionDataListResult($GetLoggedExceptionDataListResult)
    {
      $this->GetLoggedExceptionDataListResult = $GetLoggedExceptionDataListResult;
      return $this;
    }

}
