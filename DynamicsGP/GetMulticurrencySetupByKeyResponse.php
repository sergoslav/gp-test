<?php

class GetMulticurrencySetupByKeyResponse
{

    /**
     * @var MulticurrencySetup $GetMulticurrencySetupByKeyResult
     */
    protected $GetMulticurrencySetupByKeyResult = null;

    /**
     * @param MulticurrencySetup $GetMulticurrencySetupByKeyResult
     */
    public function __construct($GetMulticurrencySetupByKeyResult)
    {
      $this->GetMulticurrencySetupByKeyResult = $GetMulticurrencySetupByKeyResult;
    }

    /**
     * @return MulticurrencySetup
     */
    public function getGetMulticurrencySetupByKeyResult()
    {
      return $this->GetMulticurrencySetupByKeyResult;
    }

    /**
     * @param MulticurrencySetup $GetMulticurrencySetupByKeyResult
     * @return GetMulticurrencySetupByKeyResponse
     */
    public function setGetMulticurrencySetupByKeyResult($GetMulticurrencySetupByKeyResult)
    {
      $this->GetMulticurrencySetupByKeyResult = $GetMulticurrencySetupByKeyResult;
      return $this;
    }

}
