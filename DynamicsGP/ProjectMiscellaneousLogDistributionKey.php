<?php

class ProjectMiscellaneousLogDistributionKey extends Key
{

    /**
     * @var int $ControlType
     */
    protected $ControlType = null;

    /**
     * @var ProjectMiscellaneousLogKey $ProjectMiscellaneousLogKey
     */
    protected $ProjectMiscellaneousLogKey = null;

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
     * @return ProjectMiscellaneousLogDistributionKey
     */
    public function setControlType($ControlType)
    {
      $this->ControlType = $ControlType;
      return $this;
    }

    /**
     * @return ProjectMiscellaneousLogKey
     */
    public function getProjectMiscellaneousLogKey()
    {
      return $this->ProjectMiscellaneousLogKey;
    }

    /**
     * @param ProjectMiscellaneousLogKey $ProjectMiscellaneousLogKey
     * @return ProjectMiscellaneousLogDistributionKey
     */
    public function setProjectMiscellaneousLogKey($ProjectMiscellaneousLogKey)
    {
      $this->ProjectMiscellaneousLogKey = $ProjectMiscellaneousLogKey;
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
     * @return ProjectMiscellaneousLogDistributionKey
     */
    public function setSequenceNumber($SequenceNumber)
    {
      $this->SequenceNumber = $SequenceNumber;
      return $this;
    }

}
