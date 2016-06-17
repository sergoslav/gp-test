<?php

class CurrencyCriteria extends Criteria
{

    /**
     * @var LikeRestrictionOfstring $Description
     */
    protected $Description = null;

    /**
     * @var LikeRestrictionOfstring $ISOCode
     */
    protected $ISOCode = null;

    /**
     * @var LikeRestrictionOfstring $Id
     */
    protected $Id = null;

    /**
     * @var BetweenRestrictionOfNullableOfdateTime $LastModifiedDate
     */
    protected $LastModifiedDate = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param LikeRestrictionOfstring $Description
     * @return CurrencyCriteria
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getISOCode()
    {
      return $this->ISOCode;
    }

    /**
     * @param LikeRestrictionOfstring $ISOCode
     * @return CurrencyCriteria
     */
    public function setISOCode($ISOCode)
    {
      $this->ISOCode = $ISOCode;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param LikeRestrictionOfstring $Id
     * @return CurrencyCriteria
     */
    public function setId($Id)
    {
      $this->Id = $Id;
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
     * @return CurrencyCriteria
     */
    public function setLastModifiedDate($LastModifiedDate)
    {
      $this->LastModifiedDate = $LastModifiedDate;
      return $this;
    }

}
