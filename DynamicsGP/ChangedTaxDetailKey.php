<?php

class ChangedTaxDetailKey extends ChangedBusinessObjectKey
{

    /**
     * @var TaxDetailKey $TaxDetailKey
     */
    protected $TaxDetailKey = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return ChangedTaxDetailKey
     */
    public function setTaxDetailKey($TaxDetailKey)
    {
      $this->TaxDetailKey = $TaxDetailKey;
      return $this;
    }

}
