<?php

class GetProjectTimesheetByKeyResponse
{

    /**
     * @var ProjectTimesheet $GetProjectTimesheetByKeyResult
     */
    protected $GetProjectTimesheetByKeyResult = null;

    /**
     * @param ProjectTimesheet $GetProjectTimesheetByKeyResult
     */
    public function __construct($GetProjectTimesheetByKeyResult)
    {
      $this->GetProjectTimesheetByKeyResult = $GetProjectTimesheetByKeyResult;
    }

    /**
     * @return ProjectTimesheet
     */
    public function getGetProjectTimesheetByKeyResult()
    {
      return $this->GetProjectTimesheetByKeyResult;
    }

    /**
     * @param ProjectTimesheet $GetProjectTimesheetByKeyResult
     * @return GetProjectTimesheetByKeyResponse
     */
    public function setGetProjectTimesheetByKeyResult($GetProjectTimesheetByKeyResult)
    {
      $this->GetProjectTimesheetByKeyResult = $GetProjectTimesheetByKeyResult;
      return $this;
    }

}
