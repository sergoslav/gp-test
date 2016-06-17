<?php

class GetLoggedExceptionDataByKeyResponse
{

    /**
     * @var LoggedExceptionData $GetLoggedExceptionDataByKeyResult
     */
    protected $GetLoggedExceptionDataByKeyResult = null;

    /**
     * @param LoggedExceptionData $GetLoggedExceptionDataByKeyResult
     */
    public function __construct($GetLoggedExceptionDataByKeyResult)
    {
      $this->GetLoggedExceptionDataByKeyResult = $GetLoggedExceptionDataByKeyResult;
    }

    /**
     * @return LoggedExceptionData
     */
    public function getGetLoggedExceptionDataByKeyResult()
    {
      return $this->GetLoggedExceptionDataByKeyResult;
    }

    /**
     * @param LoggedExceptionData $GetLoggedExceptionDataByKeyResult
     * @return GetLoggedExceptionDataByKeyResponse
     */
    public function setGetLoggedExceptionDataByKeyResult($GetLoggedExceptionDataByKeyResult)
    {
      $this->GetLoggedExceptionDataByKeyResult = $GetLoggedExceptionDataByKeyResult;
      return $this;
    }

}
