<?php

class GetSalesProcessHoldSetupByKeyResponse
{

    /**
     * @var SalesProcessHoldSetup $GetSalesProcessHoldSetupByKeyResult
     */
    protected $GetSalesProcessHoldSetupByKeyResult = null;

    /**
     * @param SalesProcessHoldSetup $GetSalesProcessHoldSetupByKeyResult
     */
    public function __construct($GetSalesProcessHoldSetupByKeyResult)
    {
      $this->GetSalesProcessHoldSetupByKeyResult = $GetSalesProcessHoldSetupByKeyResult;
    }

    /**
     * @return SalesProcessHoldSetup
     */
    public function getGetSalesProcessHoldSetupByKeyResult()
    {
      return $this->GetSalesProcessHoldSetupByKeyResult;
    }

    /**
     * @param SalesProcessHoldSetup $GetSalesProcessHoldSetupByKeyResult
     * @return GetSalesProcessHoldSetupByKeyResponse
     */
    public function setGetSalesProcessHoldSetupByKeyResult($GetSalesProcessHoldSetupByKeyResult)
    {
      $this->GetSalesProcessHoldSetupByKeyResult = $GetSalesProcessHoldSetupByKeyResult;
      return $this;
    }

}
