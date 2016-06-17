<?php

class GetPayablesFinanceChargeListResponse
{

    /**
     * @var ArrayOfPayablesFinanceChargeSummary $GetPayablesFinanceChargeListResult
     */
    protected $GetPayablesFinanceChargeListResult = null;

    /**
     * @param ArrayOfPayablesFinanceChargeSummary $GetPayablesFinanceChargeListResult
     */
    public function __construct($GetPayablesFinanceChargeListResult)
    {
      $this->GetPayablesFinanceChargeListResult = $GetPayablesFinanceChargeListResult;
    }

    /**
     * @return ArrayOfPayablesFinanceChargeSummary
     */
    public function getGetPayablesFinanceChargeListResult()
    {
      return $this->GetPayablesFinanceChargeListResult;
    }

    /**
     * @param ArrayOfPayablesFinanceChargeSummary $GetPayablesFinanceChargeListResult
     * @return GetPayablesFinanceChargeListResponse
     */
    public function setGetPayablesFinanceChargeListResult($GetPayablesFinanceChargeListResult)
    {
      $this->GetPayablesFinanceChargeListResult = $GetPayablesFinanceChargeListResult;
      return $this;
    }

}
