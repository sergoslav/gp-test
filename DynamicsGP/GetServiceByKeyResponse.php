<?php

class GetServiceByKeyResponse
{

    /**
     * @var Service $GetServiceByKeyResult
     */
    protected $GetServiceByKeyResult = null;

    /**
     * @param Service $GetServiceByKeyResult
     */
    public function __construct($GetServiceByKeyResult)
    {
      $this->GetServiceByKeyResult = $GetServiceByKeyResult;
    }

    /**
     * @return Service
     */
    public function getGetServiceByKeyResult()
    {
      return $this->GetServiceByKeyResult;
    }

    /**
     * @param Service $GetServiceByKeyResult
     * @return GetServiceByKeyResponse
     */
    public function setGetServiceByKeyResult($GetServiceByKeyResult)
    {
      $this->GetServiceByKeyResult = $GetServiceByKeyResult;
      return $this;
    }

}
