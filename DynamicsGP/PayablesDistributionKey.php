<?php

class PayablesDistributionKey extends TransactionKey
{

    /**
     * @var PayablesDocumentKey $PayablesDocumentKey
     */
    protected $PayablesDocumentKey = null;

    /**
     * @var int $SequenceNumber
     */
    protected $SequenceNumber = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return PayablesDocumentKey
     */
    public function getPayablesDocumentKey()
    {
      return $this->PayablesDocumentKey;
    }

    /**
     * @param PayablesDocumentKey $PayablesDocumentKey
     * @return PayablesDistributionKey
     */
    public function setPayablesDocumentKey($PayablesDocumentKey)
    {
      $this->PayablesDocumentKey = $PayablesDocumentKey;
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
     * @return PayablesDistributionKey
     */
    public function setSequenceNumber($SequenceNumber)
    {
      $this->SequenceNumber = $SequenceNumber;
      return $this;
    }

}
