<?php

class GetInventoryVarianceListResponse
{

    /**
     * @var ArrayOfInventoryVarianceSummary $GetInventoryVarianceListResult
     */
    protected $GetInventoryVarianceListResult = null;

    /**
     * @param ArrayOfInventoryVarianceSummary $GetInventoryVarianceListResult
     */
    public function __construct($GetInventoryVarianceListResult)
    {
      $this->GetInventoryVarianceListResult = $GetInventoryVarianceListResult;
    }

    /**
     * @return ArrayOfInventoryVarianceSummary
     */
    public function getGetInventoryVarianceListResult()
    {
      return $this->GetInventoryVarianceListResult;
    }

    /**
     * @param ArrayOfInventoryVarianceSummary $GetInventoryVarianceListResult
     * @return GetInventoryVarianceListResponse
     */
    public function setGetInventoryVarianceListResult($GetInventoryVarianceListResult)
    {
      $this->GetInventoryVarianceListResult = $GetInventoryVarianceListResult;
      return $this;
    }

}
