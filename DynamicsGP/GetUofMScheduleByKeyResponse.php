<?php

class GetUofMScheduleByKeyResponse
{

    /**
     * @var UofMSchedule $GetUofMScheduleByKeyResult
     */
    protected $GetUofMScheduleByKeyResult = null;

    /**
     * @param UofMSchedule $GetUofMScheduleByKeyResult
     */
    public function __construct($GetUofMScheduleByKeyResult)
    {
      $this->GetUofMScheduleByKeyResult = $GetUofMScheduleByKeyResult;
    }

    /**
     * @return UofMSchedule
     */
    public function getGetUofMScheduleByKeyResult()
    {
      return $this->GetUofMScheduleByKeyResult;
    }

    /**
     * @param UofMSchedule $GetUofMScheduleByKeyResult
     * @return GetUofMScheduleByKeyResponse
     */
    public function setGetUofMScheduleByKeyResult($GetUofMScheduleByKeyResult)
    {
      $this->GetUofMScheduleByKeyResult = $GetUofMScheduleByKeyResult;
      return $this;
    }

}
