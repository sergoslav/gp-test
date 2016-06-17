<?php

class ProjectFeeScheduleKey extends Key
{

    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

    /**
     * @var int $LineSequenceNumber
     */
    protected $LineSequenceNumber = null;

    /**
     * @var ProjectFeeKey $ProjectFeeKey
     */
    protected $ProjectFeeKey = null;

    /**
     * @var ProjectKey $ProjectKey
     */
    protected $ProjectKey = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
      if ($this->Date == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Date);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Date
     * @return ProjectFeeScheduleKey
     */
    public function setDate(\DateTime $Date = null)
    {
      if ($Date == null) {
       $this->Date = null;
      } else {
        $this->Date = $Date->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return int
     */
    public function getLineSequenceNumber()
    {
      return $this->LineSequenceNumber;
    }

    /**
     * @param int $LineSequenceNumber
     * @return ProjectFeeScheduleKey
     */
    public function setLineSequenceNumber($LineSequenceNumber)
    {
      $this->LineSequenceNumber = $LineSequenceNumber;
      return $this;
    }

    /**
     * @return ProjectFeeKey
     */
    public function getProjectFeeKey()
    {
      return $this->ProjectFeeKey;
    }

    /**
     * @param ProjectFeeKey $ProjectFeeKey
     * @return ProjectFeeScheduleKey
     */
    public function setProjectFeeKey($ProjectFeeKey)
    {
      $this->ProjectFeeKey = $ProjectFeeKey;
      return $this;
    }

    /**
     * @return ProjectKey
     */
    public function getProjectKey()
    {
      return $this->ProjectKey;
    }

    /**
     * @param ProjectKey $ProjectKey
     * @return ProjectFeeScheduleKey
     */
    public function setProjectKey($ProjectKey)
    {
      $this->ProjectKey = $ProjectKey;
      return $this;
    }

}
