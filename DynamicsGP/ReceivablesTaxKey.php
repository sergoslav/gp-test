<?php

class ReceivablesTaxKey extends TransactionKey
{

    /**
     * @var ReceivablesDocumentKey $ReceivablesDocumentKey
     */
    protected $ReceivablesDocumentKey = null;

    /**
     * @var TaxDetailKey $TaxDetailKey
     */
    protected $TaxDetailKey = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ReceivablesDocumentKey
     */
    public function getReceivablesDocumentKey()
    {
      return $this->ReceivablesDocumentKey;
    }

    /**
     * @param ReceivablesDocumentKey $ReceivablesDocumentKey
     * @return ReceivablesTaxKey
     */
    public function setReceivablesDocumentKey($ReceivablesDocumentKey)
    {
      $this->ReceivablesDocumentKey = $ReceivablesDocumentKey;
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
     * @return ReceivablesTaxKey
     */
    public function setTaxDetailKey($TaxDetailKey)
    {
      $this->TaxDetailKey = $TaxDetailKey;
      return $this;
    }

}
