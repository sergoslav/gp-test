<?php

class ProjectEmployeeExpenseDistributionKey extends Key
{

    /**
     * @var int $ControlType
     */
    protected $ControlType = null;

    /**
     * @var ProjectEmployeeExpenseKey $ProjectEmployeeExpenseKey
     */
    protected $ProjectEmployeeExpenseKey = null;

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
     * @return ProjectEmployeeExpenseDistributionKey
     */
    public function setControlType($ControlType)
    {
      $this->ControlType = $ControlType;
      return $this;
    }

    /**
     * @return ProjectEmployeeExpenseKey
     */
    public function getProjectEmployeeExpenseKey()
    {
      return $this->ProjectEmployeeExpenseKey;
    }

    /**
     * @param ProjectEmployeeExpenseKey $ProjectEmployeeExpenseKey
     * @return ProjectEmployeeExpenseDistributionKey
     */
    public function setProjectEmployeeExpenseKey($ProjectEmployeeExpenseKey)
    {
      $this->ProjectEmployeeExpenseKey = $ProjectEmployeeExpenseKey;
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
     * @return ProjectEmployeeExpenseDistributionKey
     */
    public function setSequenceNumber($SequenceNumber)
    {
      $this->SequenceNumber = $SequenceNumber;
      return $this;
    }

}
