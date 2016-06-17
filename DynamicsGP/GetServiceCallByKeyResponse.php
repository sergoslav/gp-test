<?php

class GetServiceCallByKeyResponse
{

    /**
     * @var ServiceCall $GetServiceCallByKeyResult
     */
    protected $GetServiceCallByKeyResult = null;

    /**
     * @param ServiceCall $GetServiceCallByKeyResult
     */
    public function __construct($GetServiceCallByKeyResult)
    {
      $this->GetServiceCallByKeyResult = $GetServiceCallByKeyResult;
    }

    /**
     * @return ServiceCall
     */
    public function getGetServiceCallByKeyResult()
    {
      return $this->GetServiceCallByKeyResult;
    }

    /**
     * @param ServiceCall $GetServiceCallByKeyResult
     * @return GetServiceCallByKeyResponse
     */
    public function setGetServiceCallByKeyResult($GetServiceCallByKeyResult)
    {
      $this->GetServiceCallByKeyResult = $GetServiceCallByKeyResult;
      return $this;
    }

}
