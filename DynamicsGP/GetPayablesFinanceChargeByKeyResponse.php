<?php

class GetPayablesFinanceChargeByKeyResponse
{

    /**
     * @var PayablesFinanceCharge $GetPayablesFinanceChargeByKeyResult
     */
    protected $GetPayablesFinanceChargeByKeyResult = null;

    /**
     * @param PayablesFinanceCharge $GetPayablesFinanceChargeByKeyResult
     */
    public function __construct($GetPayablesFinanceChargeByKeyResult)
    {
      $this->GetPayablesFinanceChargeByKeyResult = $GetPayablesFinanceChargeByKeyResult;
    }

    /**
     * @return PayablesFinanceCharge
     */
    public function getGetPayablesFinanceChargeByKeyResult()
    {
      return $this->GetPayablesFinanceChargeByKeyResult;
    }

    /**
     * @param PayablesFinanceCharge $GetPayablesFinanceChargeByKeyResult
     * @return GetPayablesFinanceChargeByKeyResponse
     */
    public function setGetPayablesFinanceChargeByKeyResult($GetPayablesFinanceChargeByKeyResult)
    {
      $this->GetPayablesFinanceChargeByKeyResult = $GetPayablesFinanceChargeByKeyResult;
      return $this;
    }

}
