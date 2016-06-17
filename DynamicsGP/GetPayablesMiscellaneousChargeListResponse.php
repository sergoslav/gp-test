<?php

class GetPayablesMiscellaneousChargeListResponse
{

    /**
     * @var ArrayOfPayablesMiscellaneousChargeSummary $GetPayablesMiscellaneousChargeListResult
     */
    protected $GetPayablesMiscellaneousChargeListResult = null;

    /**
     * @param ArrayOfPayablesMiscellaneousChargeSummary $GetPayablesMiscellaneousChargeListResult
     */
    public function __construct($GetPayablesMiscellaneousChargeListResult)
    {
      $this->GetPayablesMiscellaneousChargeListResult = $GetPayablesMiscellaneousChargeListResult;
    }

    /**
     * @return ArrayOfPayablesMiscellaneousChargeSummary
     */
    public function getGetPayablesMiscellaneousChargeListResult()
    {
      return $this->GetPayablesMiscellaneousChargeListResult;
    }

    /**
     * @param ArrayOfPayablesMiscellaneousChargeSummary $GetPayablesMiscellaneousChargeListResult
     * @return GetPayablesMiscellaneousChargeListResponse
     */
    public function setGetPayablesMiscellaneousChargeListResult($GetPayablesMiscellaneousChargeListResult)
    {
      $this->GetPayablesMiscellaneousChargeListResult = $GetPayablesMiscellaneousChargeListResult;
      return $this;
    }

}
