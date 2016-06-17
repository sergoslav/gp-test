<?php

class PurchaseTransactionLineKey extends TransactionKey
{

    /**
     * @var int $LineSequenceNumber
     */
    protected $LineSequenceNumber = null;

    /**
     * @var PurchaseTransactionKey $PurchaseTransactionKey
     */
    protected $PurchaseTransactionKey = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return PurchaseTransactionLineKey
     */
    public function setLineSequenceNumber($LineSequenceNumber)
    {
      $this->LineSequenceNumber = $LineSequenceNumber;
      return $this;
    }

    /**
     * @return PurchaseTransactionKey
     */
    public function getPurchaseTransactionKey()
    {
      return $this->PurchaseTransactionKey;
    }

    /**
     * @param PurchaseTransactionKey $PurchaseTransactionKey
     * @return PurchaseTransactionLineKey
     */
    public function setPurchaseTransactionKey($PurchaseTransactionKey)
    {
      $this->PurchaseTransactionKey = $PurchaseTransactionKey;
      return $this;
    }

}
