<?php

class InventoryLineKey extends TransactionKey
{

    /**
     * @var InventoryKey $InventoryKey
     */
    protected $InventoryKey = null;

    /**
     * @var float $SequenceNumber
     */
    protected $SequenceNumber = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return InventoryKey
     */
    public function getInventoryKey()
    {
      return $this->InventoryKey;
    }

    /**
     * @param InventoryKey $InventoryKey
     * @return InventoryLineKey
     */
    public function setInventoryKey($InventoryKey)
    {
      $this->InventoryKey = $InventoryKey;
      return $this;
    }

    /**
     * @return float
     */
    public function getSequenceNumber()
    {
      return $this->SequenceNumber;
    }

    /**
     * @param float $SequenceNumber
     * @return InventoryLineKey
     */
    public function setSequenceNumber($SequenceNumber)
    {
      $this->SequenceNumber = $SequenceNumber;
      return $this;
    }

}
