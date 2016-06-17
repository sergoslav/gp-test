<?php

class TaxScheduleDetailCriteria extends Criteria
{

    /**
     * @var RestrictionOfNullableOfboolean $IsAutoCalculate
     */
    protected $IsAutoCalculate = null;

    /**
     * @var RestrictionOfNullableOfboolean $IsTaxDetailTaxable
     */
    protected $IsTaxDetailTaxable = null;

    /**
     * @var ListRestrictionOfNullableOfTaxDetailBase $TaxDetailBase
     */
    protected $TaxDetailBase = null;

    /**
     * @var LikeRestrictionOfstring $TaxDetailKeyId
     */
    protected $TaxDetailKeyId = null;

    /**
     * @var LikeRestrictionOfstring $TaxScheduleKeyId
     */
    protected $TaxScheduleKeyId = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return RestrictionOfNullableOfboolean
     */
    public function getIsAutoCalculate()
    {
      return $this->IsAutoCalculate;
    }

    /**
     * @param RestrictionOfNullableOfboolean $IsAutoCalculate
     * @return TaxScheduleDetailCriteria
     */
    public function setIsAutoCalculate($IsAutoCalculate)
    {
      $this->IsAutoCalculate = $IsAutoCalculate;
      return $this;
    }

    /**
     * @return RestrictionOfNullableOfboolean
     */
    public function getIsTaxDetailTaxable()
    {
      return $this->IsTaxDetailTaxable;
    }

    /**
     * @param RestrictionOfNullableOfboolean $IsTaxDetailTaxable
     * @return TaxScheduleDetailCriteria
     */
    public function setIsTaxDetailTaxable($IsTaxDetailTaxable)
    {
      $this->IsTaxDetailTaxable = $IsTaxDetailTaxable;
      return $this;
    }

    /**
     * @return ListRestrictionOfNullableOfTaxDetailBase
     */
    public function getTaxDetailBase()
    {
      return $this->TaxDetailBase;
    }

    /**
     * @param ListRestrictionOfNullableOfTaxDetailBase $TaxDetailBase
     * @return TaxScheduleDetailCriteria
     */
    public function setTaxDetailBase($TaxDetailBase)
    {
      $this->TaxDetailBase = $TaxDetailBase;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getTaxDetailKeyId()
    {
      return $this->TaxDetailKeyId;
    }

    /**
     * @param LikeRestrictionOfstring $TaxDetailKeyId
     * @return TaxScheduleDetailCriteria
     */
    public function setTaxDetailKeyId($TaxDetailKeyId)
    {
      $this->TaxDetailKeyId = $TaxDetailKeyId;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getTaxScheduleKeyId()
    {
      return $this->TaxScheduleKeyId;
    }

    /**
     * @param LikeRestrictionOfstring $TaxScheduleKeyId
     * @return TaxScheduleDetailCriteria
     */
    public function setTaxScheduleKeyId($TaxScheduleKeyId)
    {
      $this->TaxScheduleKeyId = $TaxScheduleKeyId;
      return $this;
    }

}
