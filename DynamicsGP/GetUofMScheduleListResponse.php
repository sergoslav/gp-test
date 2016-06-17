<?php

class GetUofMScheduleListResponse
{

    /**
     * @var ArrayOfUofMScheduleSummary $GetUofMScheduleListResult
     */
    protected $GetUofMScheduleListResult = null;

    /**
     * @param ArrayOfUofMScheduleSummary $GetUofMScheduleListResult
     */
    public function __construct($GetUofMScheduleListResult)
    {
      $this->GetUofMScheduleListResult = $GetUofMScheduleListResult;
    }

    /**
     * @return ArrayOfUofMScheduleSummary
     */
    public function getGetUofMScheduleListResult()
    {
      return $this->GetUofMScheduleListResult;
    }

    /**
     * @param ArrayOfUofMScheduleSummary $GetUofMScheduleListResult
     * @return GetUofMScheduleListResponse
     */
    public function setGetUofMScheduleListResult($GetUofMScheduleListResult)
    {
      $this->GetUofMScheduleListResult = $GetUofMScheduleListResult;
      return $this;
    }

}
