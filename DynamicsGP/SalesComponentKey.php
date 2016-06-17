<?php

class SalesComponentKey extends TransactionKey
{

    /**
     * @var int $ComponentSequenceNumber
     */
    protected $ComponentSequenceNumber = null;

    /**
     * @var SalesLineKey $SalesLineKey
     */
    protected $SalesLineKey = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return int
     */
    public function getComponentSequenceNumber()
    {
      return $this->ComponentSequenceNumber;
    }

    /**
     * @param int $ComponentSequenceNumber
     * @return SalesComponentKey
     */
    public function setComponentSequenceNumber($ComponentSequenceNumber)
    {
      $this->ComponentSequenceNumber = $ComponentSequenceNumber;
      return $this;
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
     * @return SalesComponentKey
     */
    public function setSalesLineKey($SalesLineKey)
    {
      $this->SalesLineKey = $SalesLineKey;
      return $this;
    }

}
