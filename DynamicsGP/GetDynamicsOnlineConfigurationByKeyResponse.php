<?php

class GetDynamicsOnlineConfigurationByKeyResponse
{

    /**
     * @var DynamicsOnlineConfiguration $GetDynamicsOnlineConfigurationByKeyResult
     */
    protected $GetDynamicsOnlineConfigurationByKeyResult = null;

    /**
     * @param DynamicsOnlineConfiguration $GetDynamicsOnlineConfigurationByKeyResult
     */
    public function __construct($GetDynamicsOnlineConfigurationByKeyResult)
    {
      $this->GetDynamicsOnlineConfigurationByKeyResult = $GetDynamicsOnlineConfigurationByKeyResult;
    }

    /**
     * @return DynamicsOnlineConfiguration
     */
    public function getGetDynamicsOnlineConfigurationByKeyResult()
    {
      return $this->GetDynamicsOnlineConfigurationByKeyResult;
    }

    /**
     * @param DynamicsOnlineConfiguration $GetDynamicsOnlineConfigurationByKeyResult
     * @return GetDynamicsOnlineConfigurationByKeyResponse
     */
    public function setGetDynamicsOnlineConfigurationByKeyResult($GetDynamicsOnlineConfigurationByKeyResult)
    {
      $this->GetDynamicsOnlineConfigurationByKeyResult = $GetDynamicsOnlineConfigurationByKeyResult;
      return $this;
    }

}
