<?php

class TaxScheduleDetail extends BusinessObject
{

    /**
     * @var boolean $IsAutoCalculate
     */
    protected $IsAutoCalculate = null;

    /**
     * @var boolean $IsTaxDetailTaxable
     */
    protected $IsTaxDetailTaxable = null;

    /**
     * @var TaxDetailBase $TaxDetailBase
     */
    protected $TaxDetailBase = null;

    /**
     * @var TaxScheduleDetailKey $TaxScheduleDetailKey
     */
    protected $TaxScheduleDetailKey = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return boolean
     */
    public function getIsAutoCalculate()
    {
      return $this->IsAutoCalculate;
    }

    /**
     * @param boolean $IsAutoCalculate
     * @return TaxScheduleDetail
     */
    public function setIsAutoCalculate($IsAutoCalculate)
    {
      $this->IsAutoCalculate = $IsAutoCalculate;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsTaxDetailTaxable()
    {
      return $this->IsTaxDetailTaxable;
    }

    /**
     * @param boolean $IsTaxDetailTaxable
     * @return TaxScheduleDetail
     */
    public function setIsTaxDetailTaxable($IsTaxDetailTaxable)
    {
      $this->IsTaxDetailTaxable = $IsTaxDetailTaxable;
      return $this;
    }

    /**
     * @return TaxDetailBase
     */
    public function getTaxDetailBase()
    {
      return $this->TaxDetailBase;
    }

    /**
     * @param TaxDetailBase $TaxDetailBase
     * @return TaxScheduleDetail
     */
    public function setTaxDetailBase($TaxDetailBase)
    {
      $this->TaxDetailBase = $TaxDetailBase;
      return $this;
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
     * @return TaxScheduleDetail
     */
    public function setTaxScheduleDetailKey($TaxScheduleDetailKey)
    {
      $this->TaxScheduleDetailKey = $TaxScheduleDetailKey;
      return $this;
    }

}
