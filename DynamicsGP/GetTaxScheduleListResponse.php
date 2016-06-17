<?php

class GetTaxScheduleListResponse
{

    /**
     * @var ArrayOfTaxSchedule $GetTaxScheduleListResult
     */
    protected $GetTaxScheduleListResult = null;

    /**
     * @param ArrayOfTaxSchedule $GetTaxScheduleListResult
     */
    public function __construct($GetTaxScheduleListResult)
    {
      $this->GetTaxScheduleListResult = $GetTaxScheduleListResult;
    }

    /**
     * @return ArrayOfTaxSchedule
     */
    public function getGetTaxScheduleListResult()
    {
      return $this->GetTaxScheduleListResult;
    }

    /**
     * @param ArrayOfTaxSchedule $GetTaxScheduleListResult
     * @return GetTaxScheduleListResponse
     */
    public function setGetTaxScheduleListResult($GetTaxScheduleListResult)
    {
      $this->GetTaxScheduleListResult = $GetTaxScheduleListResult;
      return $this;
    }

}
