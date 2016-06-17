<?php

class TaxDetailCriteria extends Criteria
{

    /**
     * @var LikeRestrictionOfstring $TaxDetailKeyId
     */
    protected $TaxDetailKeyId = null;

    /**
     * @var RestrictionOfNullableOfboolean $TaxDetailTaxable
     */
    protected $TaxDetailTaxable = null;

    /**
     * @var ListRestrictionOfNullableOfTaxDetailType $TaxDetailType
     */
    protected $TaxDetailType = null;

    /**
     * @var LikeRestrictionOfstring $TaxIdNumber
     */
    protected $TaxIdNumber = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return TaxDetailCriteria
     */
    public function setTaxDetailKeyId($TaxDetailKeyId)
    {
      $this->TaxDetailKeyId = $TaxDetailKeyId;
      return $this;
    }

    /**
     * @return RestrictionOfNullableOfboolean
     */
    public function getTaxDetailTaxable()
    {
      return $this->TaxDetailTaxable;
    }

    /**
     * @param RestrictionOfNullableOfboolean $TaxDetailTaxable
     * @return TaxDetailCriteria
     */
    public function setTaxDetailTaxable($TaxDetailTaxable)
    {
      $this->TaxDetailTaxable = $TaxDetailTaxable;
      return $this;
    }

    /**
     * @return ListRestrictionOfNullableOfTaxDetailType
     */
    public function getTaxDetailType()
    {
      return $this->TaxDetailType;
    }

    /**
     * @param ListRestrictionOfNullableOfTaxDetailType $TaxDetailType
     * @return TaxDetailCriteria
     */
    public function setTaxDetailType($TaxDetailType)
    {
      $this->TaxDetailType = $TaxDetailType;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getTaxIdNumber()
    {
      return $this->TaxIdNumber;
    }

    /**
     * @param LikeRestrictionOfstring $TaxIdNumber
     * @return TaxDetailCriteria
     */
    public function setTaxIdNumber($TaxIdNumber)
    {
      $this->TaxIdNumber = $TaxIdNumber;
      return $this;
    }

}
