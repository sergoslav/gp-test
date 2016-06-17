<?php

class SalesComponentBinKey extends TransactionKey
{

    /**
     * @var SalesComponentKey $SalesComponentKey
     */
    protected $SalesComponentKey = null;

    /**
     * @var int $SequenceNumber
     */
    protected $SequenceNumber = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return SalesComponentKey
     */
    public function getSalesComponentKey()
    {
      return $this->SalesComponentKey;
    }

    /**
     * @param SalesComponentKey $SalesComponentKey
     * @return SalesComponentBinKey
     */
    public function setSalesComponentKey($SalesComponentKey)
    {
      $this->SalesComponentKey = $SalesComponentKey;
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
     * @return SalesComponentBinKey
     */
    public function setSequenceNumber($SequenceNumber)
    {
      $this->SequenceNumber = $SequenceNumber;
      return $this;
    }

}
