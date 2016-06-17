<?php

class PurchaseTaxKey extends ReferenceKey
{

    /**
     * @var PurchaseTransactionKey $PurchaseTransactionKey
     */
    protected $PurchaseTransactionKey = null;

    /**
     * @var int $SequenceNumber
     */
    protected $SequenceNumber = null;

    /**
     * @var TaxDetailKey $TaxDetailKey
     */
    protected $TaxDetailKey = null;

    
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
     * @return PurchaseTaxKey
     */
    public function setPurchaseTransactionKey($PurchaseTransactionKey)
    {
      $this->PurchaseTransactionKey = $PurchaseTransactionKey;
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
     * @return PurchaseTaxKey
     */
    public function setSequenceNumber($SequenceNumber)
    {
      $this->SequenceNumber = $SequenceNumber;
      return $this;
    }

    /**
     * @return TaxDetailKey
     */
    public function getTaxDetailKey()
    {
      return $this->TaxDetailKey;
    }

    /**
     * @param TaxDetailKey $TaxDetailKey
     * @return PurchaseTaxKey
     */
    public function setTaxDetailKey($TaxDetailKey)
    {
      $this->TaxDetailKey = $TaxDetailKey;
      return $this;
    }

}
