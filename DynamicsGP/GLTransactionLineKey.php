<?php

class GLTransactionLineKey extends Key
{

    /**
     * @var int $SequenceNumber
     */
    protected $SequenceNumber = null;

    /**
     * @var GLTransactionKey $TransactionKey
     */
    protected $TransactionKey = null;

    
    public function __construct()
    {
    
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
     * @return GLTransactionLineKey
     */
    public function setSequenceNumber($SequenceNumber)
    {
      $this->SequenceNumber = $SequenceNumber;
      return $this;
    }

    /**
     * @return GLTransactionKey
     */
    public function getTransactionKey()
    {
      return $this->TransactionKey;
    }

    /**
     * @param GLTransactionKey $TransactionKey
     * @return GLTransactionLineKey
     */
    public function setTransactionKey($TransactionKey)
    {
      $this->TransactionKey = $TransactionKey;
      return $this;
    }

}
