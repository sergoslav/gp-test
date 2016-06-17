<?php

class TaxScheduleDetailChangedKeyCriteria extends BaseChangedKeyCriteria
{

    /**
     * @var BetweenRestrictionOfstring $TaxDetailKeyId
     */
    protected $TaxDetailKeyId = null;

    /**
     * @var BetweenRestrictionOfstring $TaxScheduleDetailKeyId
     */
    protected $TaxScheduleDetailKeyId = null;

    
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
     * @return TaxScheduleDetailChangedKeyCriteria
     */
    public function setTaxDetailKeyId($TaxDetailKeyId)
    {
      $this->TaxDetailKeyId = $TaxDetailKeyId;
      return $this;
    }

    /**
     * @return BetweenRestrictionOfstring
     */
    public function getTaxScheduleDetailKeyId()
    {
      return $this->TaxScheduleDetailKeyId;
    }

    /**
     * @param BetweenRestrictionOfstring $TaxScheduleDetailKeyId
     * @return TaxScheduleDetailChangedKeyCriteria
     */
    public function setTaxScheduleDetailKeyId($TaxScheduleDetailKeyId)
    {
      $this->TaxScheduleDetailKeyId = $TaxScheduleDetailKeyId;
      return $this;
    }

}
