<?php

class SalesComponentSerialKey extends TransactionKey
{

    /**
     * @var QuantityType $QuantityType
     */
    protected $QuantityType = null;

    /**
     * @var SalesComponentKey $SalesComponentKey
     */
    protected $SalesComponentKey = null;

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
     * @return SalesComponentSerialKey
     */
    public function setQuantityType($QuantityType)
    {
      $this->QuantityType = $QuantityType;
      return $this;
    }

    /**
     * @return SalesComponentKey
     */
    public function getSalesComponentKey()
    {
      return $this->SalesComponentKey;
    }

    /**
     * @param SalesComponentKey $SalesComponentKey
     * @return SalesComponentSerialKey
     */
    public function setSalesComponentKey($SalesComponentKey)
    {
      $this->SalesComponentKey = $SalesComponentKey;
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
     * @return SalesComponentSerialKey
     */
    public function setSequenceNumber($SequenceNumber)
    {
      $this->SequenceNumber = $SequenceNumber;
      return $this;
    }

}
