<?php

class ProjectMiscellaneousLogLineKey extends Key
{

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
     * @return ProjectMiscellaneousLogKey
     */
    public function getProjectMiscellaneousLogKey()
    {
      return $this->ProjectMiscellaneousLogKey;
    }

    /**
     * @param ProjectMiscellaneousLogKey $ProjectMiscellaneousLogKey
     * @return ProjectMiscellaneousLogLineKey
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
     * @return ProjectMiscellaneousLogLineKey
     */
    public function setSequenceNumber($SequenceNumber)
    {
      $this->SequenceNumber = $SequenceNumber;
      return $this;
    }

}
