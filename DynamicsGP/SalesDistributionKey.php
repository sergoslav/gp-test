<?php

class SalesDistributionKey extends TransactionKey
{

    /**
     * @var SalesDocumentKey $SalesDocumentKey
     */
    protected $SalesDocumentKey = null;

    /**
     * @var int $SequenceNumber
     */
    protected $SequenceNumber = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return SalesDocumentKey
     */
    public function getSalesDocumentKey()
    {
      return $this->SalesDocumentKey;
    }

    /**
     * @param SalesDocumentKey $SalesDocumentKey
     * @return SalesDistributionKey
     */
    public function setSalesDocumentKey($SalesDocumentKey)
    {
      $this->SalesDocumentKey = $SalesDocumentKey;
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
     * @return SalesDistributionKey
     */
    public function setSequenceNumber($SequenceNumber)
    {
      $this->SequenceNumber = $SequenceNumber;
      return $this;
    }

}
