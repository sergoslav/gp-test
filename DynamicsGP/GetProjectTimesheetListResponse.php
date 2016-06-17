<?php

class GetProjectTimesheetListResponse
{

    /**
     * @var ArrayOfProjectTimesheetSummary $GetProjectTimesheetListResult
     */
    protected $GetProjectTimesheetListResult = null;

    /**
     * @param ArrayOfProjectTimesheetSummary $GetProjectTimesheetListResult
     */
    public function __construct($GetProjectTimesheetListResult)
    {
      $this->GetProjectTimesheetListResult = $GetProjectTimesheetListResult;
    }

    /**
     * @return ArrayOfProjectTimesheetSummary
     */
    public function getGetProjectTimesheetListResult()
    {
      return $this->GetProjectTimesheetListResult;
    }

    /**
     * @param ArrayOfProjectTimesheetSummary $GetProjectTimesheetListResult
     * @return GetProjectTimesheetListResponse
     */
    public function setGetProjectTimesheetListResult($GetProjectTimesheetListResult)
    {
      $this->GetProjectTimesheetListResult = $GetProjectTimesheetListResult;
      return $this;
    }

}
