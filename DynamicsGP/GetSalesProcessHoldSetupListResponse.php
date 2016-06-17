<?php

class GetSalesProcessHoldSetupListResponse
{

    /**
     * @var ArrayOfSalesProcessHoldSetup $GetSalesProcessHoldSetupListResult
     */
    protected $GetSalesProcessHoldSetupListResult = null;

    /**
     * @param ArrayOfSalesProcessHoldSetup $GetSalesProcessHoldSetupListResult
     */
    public function __construct($GetSalesProcessHoldSetupListResult)
    {
      $this->GetSalesProcessHoldSetupListResult = $GetSalesProcessHoldSetupListResult;
    }

    /**
     * @return ArrayOfSalesProcessHoldSetup
     */
    public function getGetSalesProcessHoldSetupListResult()
    {
      return $this->GetSalesProcessHoldSetupListResult;
    }

    /**
     * @param ArrayOfSalesProcessHoldSetup $GetSalesProcessHoldSetupListResult
     * @return GetSalesProcessHoldSetupListResponse
     */
    public function setGetSalesProcessHoldSetupListResult($GetSalesProcessHoldSetupListResult)
    {
      $this->GetSalesProcessHoldSetupListResult = $GetSalesProcessHoldSetupListResult;
      return $this;
    }

}
