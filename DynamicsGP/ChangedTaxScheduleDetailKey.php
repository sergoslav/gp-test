<?php

class ChangedTaxScheduleDetailKey extends ChangedBusinessObjectKey
{

    /**
     * @var TaxScheduleDetailKey $TaxScheduleDetailKey
     */
    protected $TaxScheduleDetailKey = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return TaxScheduleDetailKey
     */
    public function getTaxScheduleDetailKey()
    {
      return $this->TaxScheduleDetailKey;
    }

    /**
     * @param TaxScheduleDetailKey $TaxScheduleDetailKey
     * @return ChangedTaxScheduleDetailKey
     */
    public function setTaxScheduleDetailKey($TaxScheduleDetailKey)
    {
      $this->TaxScheduleDetailKey = $TaxScheduleDetailKey;
      return $this;
    }

}
