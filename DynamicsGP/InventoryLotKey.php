<?php

class InventoryLotKey extends TransactionKey
{

    /**
     * @var InventoryLineKey $InventoryLineKey
     */
    protected $InventoryLineKey = null;

    /**
     * @var int $SequenceNumber
     */
    protected $SequenceNumber = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return InventoryLineKey
     */
    public function getInventoryLineKey()
    {
      return $this->InventoryLineKey;
    }

    /**
     * @param InventoryLineKey $InventoryLineKey
     * @return InventoryLotKey
     */
    public function setInventoryLineKey($InventoryLineKey)
    {
      $this->InventoryLineKey = $InventoryLineKey;
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
     * @return InventoryLotKey
     */
    public function setSequenceNumber($SequenceNumber)
    {
      $this->SequenceNumber = $SequenceNumber;
      return $this;
    }

}
