<?php

class ServiceLineKey extends TransactionKey
{

    /**
     * @var int $LineSequenceNumber
     */
    protected $LineSequenceNumber = null;

    /**
     * @var ServiceDocumentKey $ServiceDocumentKey
     */
    protected $ServiceDocumentKey = null;

    
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
     * @return ServiceLineKey
     */
    public function setLineSequenceNumber($LineSequenceNumber)
    {
      $this->LineSequenceNumber = $LineSequenceNumber;
      return $this;
    }

    /**
     * @return ServiceDocumentKey
     */
    public function getServiceDocumentKey()
    {
      return $this->ServiceDocumentKey;
    }

    /**
     * @param ServiceDocumentKey $ServiceDocumentKey
     * @return ServiceLineKey
     */
    public function setServiceDocumentKey($ServiceDocumentKey)
    {
      $this->ServiceDocumentKey = $ServiceDocumentKey;
      return $this;
    }

}
