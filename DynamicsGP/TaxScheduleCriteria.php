<?php

class TaxScheduleCriteria extends Criteria
{

    /**
     * @var LikeRestrictionOfstring $TaxScheduleDescription
     */
    protected $TaxScheduleDescription = null;

    /**
     * @var LikeRestrictionOfstring $TaxScheduleKeyId
     */
    protected $TaxScheduleKeyId = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getTaxScheduleDescription()
    {
      return $this->TaxScheduleDescription;
    }

    /**
     * @param LikeRestrictionOfstring $TaxScheduleDescription
     * @return TaxScheduleCriteria
     */
    public function setTaxScheduleDescription($TaxScheduleDescription)
    {
      $this->TaxScheduleDescription = $TaxScheduleDescription;
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
     * @return TaxScheduleCriteria
     */
    public function setTaxScheduleKeyId($TaxScheduleKeyId)
    {
      $this->TaxScheduleKeyId = $TaxScheduleKeyId;
      return $this;
    }

}
