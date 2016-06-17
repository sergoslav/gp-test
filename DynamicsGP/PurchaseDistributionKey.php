<?php

class PurchaseDistributionKey extends TransactionKey
{

    /**
     * @var PurchaseTransactionKey $PurchaseTransactionKey
     */
    protected $PurchaseTransactionKey = null;

    /**
     * @var int $SequenceNumber
     */
    protected $SequenceNumber = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return PurchaseDistributionKey
     */
    public function setPurchaseTransactionKey($PurchaseTransactionKey)
    {
      $this->PurchaseTransactionKey = $PurchaseTransactionKey;
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
     * @return PurchaseDistributionKey
     */
    public function setSequenceNumber($SequenceNumber)
    {
      $this->SequenceNumber = $SequenceNumber;
      return $this;
    }

}
