<?php

class PayablesTaxKey extends TransactionKey
{

    /**
     * @var PayablesDocumentKey $PayablesDocumentKey
     */
    protected $PayablesDocumentKey = null;

    /**
     * @var TaxDetailKey $TaxDetailKey
     */
    protected $TaxDetailKey = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return PayablesDocumentKey
     */
    public function getPayablesDocumentKey()
    {
      return $this->PayablesDocumentKey;
    }

    /**
     * @param PayablesDocumentKey $PayablesDocumentKey
     * @return PayablesTaxKey
     */
    public function setPayablesDocumentKey($PayablesDocumentKey)
    {
      $this->PayablesDocumentKey = $PayablesDocumentKey;
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
     * @return PayablesTaxKey
     */
    public function setTaxDetailKey($TaxDetailKey)
    {
      $this->TaxDetailKey = $TaxDetailKey;
      return $this;
    }

}
