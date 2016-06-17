<?php

class SalesDocumentTaxKey extends TransactionKey
{

    /**
     * @var SalesDocumentKey $SalesDocumentKey
     */
    protected $SalesDocumentKey = null;

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
     * @return SalesDocumentKey
     */
    public function getSalesDocumentKey()
    {
      return $this->SalesDocumentKey;
    }

    /**
     * @param SalesDocumentKey $SalesDocumentKey
     * @return SalesDocumentTaxKey
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
     * @return SalesDocumentTaxKey
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
     * @return SalesDocumentTaxKey
     */
    public function setTaxDetailKey($TaxDetailKey)
    {
      $this->TaxDetailKey = $TaxDetailKey;
      return $this;
    }

}
