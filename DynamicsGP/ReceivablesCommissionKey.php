<?php

class ReceivablesCommissionKey extends TransactionKey
{

    /**
     * @var ReceivablesDocumentKey $ReceivablesDocumentKey
     */
    protected $ReceivablesDocumentKey = null;

    /**
     * @var int $SequenceNumber
     */
    protected $SequenceNumber = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ReceivablesDocumentKey
     */
    public function getReceivablesDocumentKey()
    {
      return $this->ReceivablesDocumentKey;
    }

    /**
     * @param ReceivablesDocumentKey $ReceivablesDocumentKey
     * @return ReceivablesCommissionKey
     */
    public function setReceivablesDocumentKey($ReceivablesDocumentKey)
    {
      $this->ReceivablesDocumentKey = $ReceivablesDocumentKey;
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
     * @return ReceivablesCommissionKey
     */
    public function setSequenceNumber($SequenceNumber)
    {
      $this->SequenceNumber = $SequenceNumber;
      return $this;
    }

}
