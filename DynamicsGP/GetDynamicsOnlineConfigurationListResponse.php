<?php

class GetDynamicsOnlineConfigurationListResponse
{

    /**
     * @var ArrayOfDynamicsOnlineConfiguration $GetDynamicsOnlineConfigurationListResult
     */
    protected $GetDynamicsOnlineConfigurationListResult = null;

    /**
     * @param ArrayOfDynamicsOnlineConfiguration $GetDynamicsOnlineConfigurationListResult
     */
    public function __construct($GetDynamicsOnlineConfigurationListResult)
    {
      $this->GetDynamicsOnlineConfigurationListResult = $GetDynamicsOnlineConfigurationListResult;
    }

    /**
     * @return ArrayOfDynamicsOnlineConfiguration
     */
    public function getGetDynamicsOnlineConfigurationListResult()
    {
      return $this->GetDynamicsOnlineConfigurationListResult;
    }

    /**
     * @param ArrayOfDynamicsOnlineConfiguration $GetDynamicsOnlineConfigurationListResult
     * @return GetDynamicsOnlineConfigurationListResponse
     */
    public function setGetDynamicsOnlineConfigurationListResult($GetDynamicsOnlineConfigurationListResult)
    {
      $this->GetDynamicsOnlineConfigurationListResult = $GetDynamicsOnlineConfigurationListResult;
      return $this;
    }

}
