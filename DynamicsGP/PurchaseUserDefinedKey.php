<?php

class PurchaseUserDefinedKey extends TransactionKey
{

    /**
     * @var PurchaseTransactionKey $PurchaseTransactionKey
     */
    protected $PurchaseTransactionKey = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return PurchaseTransactionKey
     */
    public function getPurchaseTransactionKey()
    {
      return $this->PurchaseTransactionKey;
    }

    /**
     * @param PurchaseTransactionKey $PurchaseTransactionKey
     * @return PurchaseUserDefinedKey
     */
    public function setPurchaseTransactionKey($PurchaseTransactionKey)
    {
      $this->PurchaseTransactionKey = $PurchaseTransactionKey;
      return $this;
    }

}
