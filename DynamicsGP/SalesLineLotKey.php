<?php

class SalesLineLotKey extends TransactionKey
{

    /**
     * @var QuantityType $QuantityType
     */
    protected $QuantityType = null;

    /**
     * @var SalesLineKey $SalesLineKey
     */
    protected $SalesLineKey = null;

    /**
     * @var int $SequenceNumber
     */
    protected $SequenceNumber = null;

    
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
     * @return SalesLineLotKey
     */
    public function setQuantityType($QuantityType)
    {
      $this->QuantityType = $QuantityType;
      return $this;
    }

    /**
     * @return SalesLineKey
     */
    public function getSalesLineKey()
    {
      return $this->SalesLineKey;
    }

    /**
     * @param SalesLineKey $SalesLineKey
     * @return SalesLineLotKey
     */
    public function setSalesLineKey($SalesLineKey)
    {
      $this->SalesLineKey = $SalesLineKey;
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
     * @return SalesLineLotKey
     */
    public function setSequenceNumber($SequenceNumber)
    {
      $this->SequenceNumber = $SequenceNumber;
      return $this;
    }

}
