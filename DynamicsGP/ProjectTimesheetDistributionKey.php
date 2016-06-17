<?php

class ProjectTimesheetDistributionKey extends Key
{

    /**
     * @var int $ControlType
     */
    protected $ControlType = null;

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
     * @return int
     */
    public function getControlType()
    {
      return $this->ControlType;
    }

    /**
     * @param int $ControlType
     * @return ProjectTimesheetDistributionKey
     */
    public function setControlType($ControlType)
    {
      $this->ControlType = $ControlType;
      return $this;
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
     * @return ProjectTimesheetDistributionKey
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
     * @return ProjectTimesheetDistributionKey
     */
    public function setSequenceNumber($SequenceNumber)
    {
      $this->SequenceNumber = $SequenceNumber;
      return $this;
    }

}
