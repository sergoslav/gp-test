<?php

class PriceLevelCriteria extends Criteria
{

    /**
     * @var BetweenRestrictionOfNullableOfdateTime $CreatedDate
     */
    protected $CreatedDate = null;

    /**
     * @var BetweenRestrictionOfNullableOfdateTime $LastModifiedDate
     */
    protected $LastModifiedDate = null;

    /**
     * @var BetweenRestrictionOfNullableOfdateTime $ModifiedDate
     */
    protected $ModifiedDate = null;

    /**
     * @var BetweenRestrictionOfstring $PriceLevelKeyId
     */
    protected $PriceLevelKeyId = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return BetweenRestrictionOfNullableOfdateTime
     */
    public function getCreatedDate()
    {
      return $this->CreatedDate;
    }

    /**
     * @param BetweenRestrictionOfNullableOfdateTime $CreatedDate
     * @return PriceLevelCriteria
     */
    public function setCreatedDate($CreatedDate)
    {
      $this->CreatedDate = $CreatedDate;
      return $this;
    }

    /**
     * @return BetweenRestrictionOfNullableOfdateTime
     */
    public function getLastModifiedDate()
    {
      return $this->LastModifiedDate;
    }

    /**
     * @param BetweenRestrictionOfNullableOfdateTime $LastModifiedDate
     * @return PriceLevelCriteria
     */
    public function setLastModifiedDate($LastModifiedDate)
    {
      $this->LastModifiedDate = $LastModifiedDate;
      return $this;
    }

    /**
     * @return BetweenRestrictionOfNullableOfdateTime
     */
    public function getModifiedDate()
    {
      return $this->ModifiedDate;
    }

    /**
     * @param BetweenRestrictionOfNullableOfdateTime $ModifiedDate
     * @return PriceLevelCriteria
     */
    public function setModifiedDate($ModifiedDate)
    {
      $this->ModifiedDate = $ModifiedDate;
      return $this;
    }

    /**
     * @return BetweenRestrictionOfstring
     */
    public function getPriceLevelKeyId()
    {
      return $this->PriceLevelKeyId;
    }

    /**
     * @param BetweenRestrictionOfstring $PriceLevelKeyId
     * @return PriceLevelCriteria
     */
    public function setPriceLevelKeyId($PriceLevelKeyId)
    {
      $this->PriceLevelKeyId = $PriceLevelKeyId;
      return $this;
    }

}
