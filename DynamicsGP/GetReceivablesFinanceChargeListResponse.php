<?php

class GetReceivablesFinanceChargeListResponse
{

    /**
     * @var ArrayOfReceivablesFinanceChargeSummary $GetReceivablesFinanceChargeListResult
     */
    protected $GetReceivablesFinanceChargeListResult = null;

    /**
     * @param ArrayOfReceivablesFinanceChargeSummary $GetReceivablesFinanceChargeListResult
     */
    public function __construct($GetReceivablesFinanceChargeListResult)
    {
      $this->GetReceivablesFinanceChargeListResult = $GetReceivablesFinanceChargeListResult;
    }

    /**
     * @return ArrayOfReceivablesFinanceChargeSummary
     */
    public function getGetReceivablesFinanceChargeListResult()
    {
      return $this->GetReceivablesFinanceChargeListResult;
    }

    /**
     * @param ArrayOfReceivablesFinanceChargeSummary $GetReceivablesFinanceChargeListResult
     * @return GetReceivablesFinanceChargeListResponse
     */
    public function setGetReceivablesFinanceChargeListResult($GetReceivablesFinanceChargeListResult)
    {
      $this->GetReceivablesFinanceChargeListResult = $GetReceivablesFinanceChargeListResult;
      return $this;
    }

}
