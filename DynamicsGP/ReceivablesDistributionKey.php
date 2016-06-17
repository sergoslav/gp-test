<?php

class ReceivablesDistributionKey extends TransactionKey
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
     * @return ReceivablesDistributionKey
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
     * @return ReceivablesDistributionKey
     */
    public function setSequenceNumber($SequenceNumber)
    {
      $this->SequenceNumber = $SequenceNumber;
      return $this;
    }

}
