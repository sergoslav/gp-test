<?php

class GetTaxScheduleDetailByKeyResponse
{

    /**
     * @var TaxScheduleDetail $GetTaxScheduleDetailByKeyResult
     */
    protected $GetTaxScheduleDetailByKeyResult = null;

    /**
     * @param TaxScheduleDetail $GetTaxScheduleDetailByKeyResult
     */
    public function __construct($GetTaxScheduleDetailByKeyResult)
    {
      $this->GetTaxScheduleDetailByKeyResult = $GetTaxScheduleDetailByKeyResult;
    }

    /**
     * @return TaxScheduleDetail
     */
    public function getGetTaxScheduleDetailByKeyResult()
    {
      return $this->GetTaxScheduleDetailByKeyResult;
    }

    /**
     * @param TaxScheduleDetail $GetTaxScheduleDetailByKeyResult
     * @return GetTaxScheduleDetailByKeyResponse
     */
    public function setGetTaxScheduleDetailByKeyResult($GetTaxScheduleDetailByKeyResult)
    {
      $this->GetTaxScheduleDetailByKeyResult = $GetTaxScheduleDetailByKeyResult;
      return $this;
    }

}
