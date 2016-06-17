<?php

class ProjectEmployeeExpenseLineKey extends Key
{

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
     * @return ProjectEmployeeExpenseKey
     */
    public function getProjectEmployeeExpenseKey()
    {
      return $this->ProjectEmployeeExpenseKey;
    }

    /**
     * @param ProjectEmployeeExpenseKey $ProjectEmployeeExpenseKey
     * @return ProjectEmployeeExpenseLineKey
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
     * @return ProjectEmployeeExpenseLineKey
     */
    public function setSequenceNumber($SequenceNumber)
    {
      $this->SequenceNumber = $SequenceNumber;
      return $this;
    }

}
