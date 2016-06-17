<?php

class GetReceivablesFinanceChargeByKeyResponse
{

    /**
     * @var ReceivablesFinanceCharge $GetReceivablesFinanceChargeByKeyResult
     */
    protected $GetReceivablesFinanceChargeByKeyResult = null;

    /**
     * @param ReceivablesFinanceCharge $GetReceivablesFinanceChargeByKeyResult
     */
    public function __construct($GetReceivablesFinanceChargeByKeyResult)
    {
      $this->GetReceivablesFinanceChargeByKeyResult = $GetReceivablesFinanceChargeByKeyResult;
    }

    /**
     * @return ReceivablesFinanceCharge
     */
    public function getGetReceivablesFinanceChargeByKeyResult()
    {
      return $this->GetReceivablesFinanceChargeByKeyResult;
    }

    /**
     * @param ReceivablesFinanceCharge $GetReceivablesFinanceChargeByKeyResult
     * @return GetReceivablesFinanceChargeByKeyResponse
     */
    public function setGetReceivablesFinanceChargeByKeyResult($GetReceivablesFinanceChargeByKeyResult)
    {
      $this->GetReceivablesFinanceChargeByKeyResult = $GetReceivablesFinanceChargeByKeyResult;
      return $this;
    }

}
