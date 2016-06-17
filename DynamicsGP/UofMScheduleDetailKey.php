<?php

class UofMScheduleDetailKey extends ReferenceKey
{

    /**
     * @var int $SequenceNumber
     */
    protected $SequenceNumber = null;

    /**
     * @var UofMScheduleKey $UofMScheduleKey
     */
    protected $UofMScheduleKey = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return UofMScheduleDetailKey
     */
    public function setSequenceNumber($SequenceNumber)
    {
      $this->SequenceNumber = $SequenceNumber;
      return $this;
    }

    /**
     * @return UofMScheduleKey
     */
    public function getUofMScheduleKey()
    {
      return $this->UofMScheduleKey;
    }

    /**
     * @param UofMScheduleKey $UofMScheduleKey
     * @return UofMScheduleDetailKey
     */
    public function setUofMScheduleKey($UofMScheduleKey)
    {
      $this->UofMScheduleKey = $UofMScheduleKey;
      return $this;
    }

}
