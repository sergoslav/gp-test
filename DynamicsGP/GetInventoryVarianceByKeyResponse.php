<?php

class GetInventoryVarianceByKeyResponse
{

    /**
     * @var InventoryVariance $GetInventoryVarianceByKeyResult
     */
    protected $GetInventoryVarianceByKeyResult = null;

    /**
     * @param InventoryVariance $GetInventoryVarianceByKeyResult
     */
    public function __construct($GetInventoryVarianceByKeyResult)
    {
      $this->GetInventoryVarianceByKeyResult = $GetInventoryVarianceByKeyResult;
    }

    /**
     * @return InventoryVariance
     */
    public function getGetInventoryVarianceByKeyResult()
    {
      return $this->GetInventoryVarianceByKeyResult;
    }

    /**
     * @param InventoryVariance $GetInventoryVarianceByKeyResult
     * @return GetInventoryVarianceByKeyResponse
     */
    public function setGetInventoryVarianceByKeyResult($GetInventoryVarianceByKeyResult)
    {
      $this->GetInventoryVarianceByKeyResult = $GetInventoryVarianceByKeyResult;
      return $this;
    }

}
