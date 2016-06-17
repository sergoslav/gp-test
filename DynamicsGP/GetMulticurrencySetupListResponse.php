<?php

class GetMulticurrencySetupListResponse
{

    /**
     * @var ArrayOfMulticurrencySetup $GetMulticurrencySetupListResult
     */
    protected $GetMulticurrencySetupListResult = null;

    /**
     * @param ArrayOfMulticurrencySetup $GetMulticurrencySetupListResult
     */
    public function __construct($GetMulticurrencySetupListResult)
    {
      $this->GetMulticurrencySetupListResult = $GetMulticurrencySetupListResult;
    }

    /**
     * @return ArrayOfMulticurrencySetup
     */
    public function getGetMulticurrencySetupListResult()
    {
      return $this->GetMulticurrencySetupListResult;
    }

    /**
     * @param ArrayOfMulticurrencySetup $GetMulticurrencySetupListResult
     * @return GetMulticurrencySetupListResponse
     */
    public function setGetMulticurrencySetupListResult($GetMulticurrencySetupListResult)
    {
      $this->GetMulticurrencySetupListResult = $GetMulticurrencySetupListResult;
      return $this;
    }

}
