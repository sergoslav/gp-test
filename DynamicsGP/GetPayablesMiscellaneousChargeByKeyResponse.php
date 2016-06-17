<?php

class GetPayablesMiscellaneousChargeByKeyResponse
{

    /**
     * @var PayablesMiscellaneousCharge $GetPayablesMiscellaneousChargeByKeyResult
     */
    protected $GetPayablesMiscellaneousChargeByKeyResult = null;

    /**
     * @param PayablesMiscellaneousCharge $GetPayablesMiscellaneousChargeByKeyResult
     */
    public function __construct($GetPayablesMiscellaneousChargeByKeyResult)
    {
      $this->GetPayablesMiscellaneousChargeByKeyResult = $GetPayablesMiscellaneousChargeByKeyResult;
    }

    /**
     * @return PayablesMiscellaneousCharge
     */
    public function getGetPayablesMiscellaneousChargeByKeyResult()
    {
      return $this->GetPayablesMiscellaneousChargeByKeyResult;
    }

    /**
     * @param PayablesMiscellaneousCharge $GetPayablesMiscellaneousChargeByKeyResult
     * @return GetPayablesMiscellaneousChargeByKeyResponse
     */
    public function setGetPayablesMiscellaneousChargeByKeyResult($GetPayablesMiscellaneousChargeByKeyResult)
    {
      $this->GetPayablesMiscellaneousChargeByKeyResult = $GetPayablesMiscellaneousChargeByKeyResult;
      return $this;
    }

}
