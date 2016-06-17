<?php

class ServiceSerialLotKey extends TransactionKey
{

    /**
     * @var QuantityType $QuantityType
     */
    protected $QuantityType = null;

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
     * @return QuantityType
     */
    public function getQuantityType()
    {
      return $this->QuantityType;
    }

    /**
     * @param QuantityType $QuantityType
     * @return ServiceSerialLotKey
     */
    public function setQuantityType($QuantityType)
    {
      $this->QuantityType = $QuantityType;
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
     * @return ServiceSerialLotKey
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
     * @return ServiceSerialLotKey
     */
    public function setServiceLineKey($ServiceLineKey)
    {
      $this->ServiceLineKey = $ServiceLineKey;
      return $this;
    }

}
