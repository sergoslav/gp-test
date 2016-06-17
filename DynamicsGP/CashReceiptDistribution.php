<?php

class CashReceiptDistribution extends Distribution
{

    /**
     * @var ReceivablesDistributionKey $Key
     */
    protected $Key = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ReceivablesDistributionKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param ReceivablesDistributionKey $Key
     * @return CashReceiptDistribution
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
