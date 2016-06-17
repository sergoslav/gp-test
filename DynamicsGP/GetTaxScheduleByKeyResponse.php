<?php

class GetTaxScheduleByKeyResponse
{

    /**
     * @var TaxSchedule $GetTaxScheduleByKeyResult
     */
    protected $GetTaxScheduleByKeyResult = null;

    /**
     * @param TaxSchedule $GetTaxScheduleByKeyResult
     */
    public function __construct($GetTaxScheduleByKeyResult)
    {
      $this->GetTaxScheduleByKeyResult = $GetTaxScheduleByKeyResult;
    }

    /**
     * @return TaxSchedule
     */
    public function getGetTaxScheduleByKeyResult()
    {
      return $this->GetTaxScheduleByKeyResult;
    }

    /**
     * @param TaxSchedule $GetTaxScheduleByKeyResult
     * @return GetTaxScheduleByKeyResponse
     */
    public function setGetTaxScheduleByKeyResult($GetTaxScheduleByKeyResult)
    {
      $this->GetTaxScheduleByKeyResult = $GetTaxScheduleByKeyResult;
      return $this;
    }

}
