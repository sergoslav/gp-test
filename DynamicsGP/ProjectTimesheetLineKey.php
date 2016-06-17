<?php

class ProjectTimesheetLineKey extends Key
{

    /**
     * @var ProjectTimesheetKey $ProjectTimesheetKey
     */
    protected $ProjectTimesheetKey = null;

    /**
     * @var int $SequenceNumber
     */
    protected $SequenceNumber = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProjectTimesheetKey
     */
    public function getProjectTimesheetKey()
    {
      return $this->ProjectTimesheetKey;
    }

    /**
     * @param ProjectTimesheetKey $ProjectTimesheetKey
     * @return ProjectTimesheetLineKey
     */
    public function setProjectTimesheetKey($ProjectTimesheetKey)
    {
      $this->ProjectTimesheetKey = $ProjectTimesheetKey;
      return $this;
    }

    /**
     * @return int
     */
    public function getSequenceNumber()
    {
      return $this->SequenceNumber;
    }

    /**
     * @param int $SequenceNumber
     * @return ProjectTimesheetLineKey
     */
    public function setSequenceNumber($SequenceNumber)
    {
      $this->SequenceNumber = $SequenceNumber;
      return $this;
    }

}
