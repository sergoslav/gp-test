<?php

class SalesLineKey extends TransactionKey
{

    /**
     * @var int $LineSequenceNumber
     */
    protected $LineSequenceNumber = null;

    /**
     * @var SalesDocumentKey $SalesDocumentKey
     */
    protected $SalesDocumentKey = null;

    
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
     * @return SalesLineKey
     */
    public function setLineSequenceNumber($LineSequenceNumber)
    {
      $this->LineSequenceNumber = $LineSequenceNumber;
      return $this;
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
     * @return SalesLineKey
     */
    public function setSalesDocumentKey($SalesDocumentKey)
    {
      $this->SalesDocumentKey = $SalesDocumentKey;
      return $this;
    }

}
