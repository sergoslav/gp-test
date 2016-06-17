<?php

class ProjectFeeItemKey extends Key
{

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
     * @return int
     */
    public function getLineSequenceNumber()
    {
      return $this->LineSequenceNumber;
    }

    /**
     * @param int $LineSequenceNumber
     * @return ProjectFeeItemKey
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
     * @return ProjectFeeItemKey
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
     * @return ProjectFeeItemKey
     */
    public function setProjectKey($ProjectKey)
    {
      $this->ProjectKey = $ProjectKey;
      return $this;
    }

}
