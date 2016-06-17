<?php

class SalesLineBinKey extends TransactionKey
{

    /**
     * @var SalesLineKey $SalesLineKey
     */
    protected $SalesLineKey = null;

    /**
     * @var int $SequenceNumber
     */
    protected $SequenceNumber = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return SalesLineKey
     */
    public function getSalesLineKey()
    {
      return $this->SalesLineKey;
    }

    /**
     * @param SalesLineKey $SalesLineKey
     * @return SalesLineBinKey
     */
    public function setSalesLineKey($SalesLineKey)
    {
      $this->SalesLineKey = $SalesLineKey;
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
     * @return SalesLineBinKey
     */
    public function setSequenceNumber($SequenceNumber)
    {
      $this->SequenceNumber = $SequenceNumber;
      return $this;
    }

}
