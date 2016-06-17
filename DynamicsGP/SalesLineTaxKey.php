<?php

class SalesLineTaxKey extends TransactionKey
{

    /**
     * @var SalesLineKey $SalesLineKey
     */
    protected $SalesLineKey = null;

    /**
     * @var TaxDetailKey $TaxDetailKey
     */
    protected $TaxDetailKey = null;

    
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
     * @return SalesLineTaxKey
     */
    public function setSalesLineKey($SalesLineKey)
    {
      $this->SalesLineKey = $SalesLineKey;
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
     * @return SalesLineTaxKey
     */
    public function setTaxDetailKey($TaxDetailKey)
    {
      $this->TaxDetailKey = $TaxDetailKey;
      return $this;
    }

}
