<?php

class TaxDetailChangedKeyCriteria extends BaseChangedKeyCriteria
{

    /**
     * @var BetweenRestrictionOfstring $TaxDetailKeyId
     */
    protected $TaxDetailKeyId = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return BetweenRestrictionOfstring
     */
    public function getTaxDetailKeyId()
    {
      return $this->TaxDetailKeyId;
    }

    /**
     * @param BetweenRestrictionOfstring $TaxDetailKeyId
     * @return TaxDetailChangedKeyCriteria
     */
    public function setTaxDetailKeyId($TaxDetailKeyId)
    {
      $this->TaxDetailKeyId = $TaxDetailKeyId;
      return $this;
    }

}
