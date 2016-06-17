<?php

class ServiceLineDetailKey extends TransactionKey
{

    /**
     * @var int $SequenceNumber
     */
    protected $SequenceNumber = null;

    /**
     * @var ServiceLineKey $ServiceLineKey
     */
    protected $ServiceLineKey = null;

    
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
     * @return ServiceLineDetailKey
     */
    public function setSequenceNumber($SequenceNumber)
    {
      $this->SequenceNumber = $SequenceNumber;
      return $this;
    }

    /**
     * @return ServiceLineKey
     */
    public function getServiceLineKey()
    {
      return $this->ServiceLineKey;
    }

    /**
     * @param ServiceLineKey $ServiceLineKey
     * @return ServiceLineDetailKey
     */
    public function setServiceLineKey($ServiceLineKey)
    {
      $this->ServiceLineKey = $ServiceLineKey;
      return $this;
    }

}
