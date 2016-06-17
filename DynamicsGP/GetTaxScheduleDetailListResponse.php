<?php

class GetTaxScheduleDetailListResponse
{

    /**
     * @var ArrayOfTaxScheduleDetail $GetTaxScheduleDetailListResult
     */
    protected $GetTaxScheduleDetailListResult = null;

    /**
     * @param ArrayOfTaxScheduleDetail $GetTaxScheduleDetailListResult
     */
    public function __construct($GetTaxScheduleDetailListResult)
    {
      $this->GetTaxScheduleDetailListResult = $GetTaxScheduleDetailListResult;
    }

    /**
     * @return ArrayOfTaxScheduleDetail
     */
    public function getGetTaxScheduleDetailListResult()
    {
      return $this->GetTaxScheduleDetailListResult;
    }

    /**
     * @param ArrayOfTaxScheduleDetail $GetTaxScheduleDetailListResult
     * @return GetTaxScheduleDetailListResponse
     */
    public function setGetTaxScheduleDetailListResult($GetTaxScheduleDetailListResult)
    {
      $this->GetTaxScheduleDetailListResult = $GetTaxScheduleDetailListResult;
      return $this;
    }

}
