<?php

class CompanyCriteria extends Criteria
{

    /**
     * @var BetweenRestrictionOfNullableOfdateTime $CreatedDate
     */
    protected $CreatedDate = null;

    /**
     * @var BetweenRestrictionOfNullableOfint $Id
     */
    protected $Id = null;

    /**
     * @var BetweenRestrictionOfNullableOfdateTime $ModifiedDate
     */
    protected $ModifiedDate = null;

    /**
     * @var LikeRestrictionOfstring $Name
     */
    protected $Name = null;

    
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
     * @return CompanyCriteria
     */
    public function setCreatedDate($CreatedDate)
    {
      $this->CreatedDate = $CreatedDate;
      return $this;
    }

    /**
     * @return BetweenRestrictionOfNullableOfint
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param BetweenRestrictionOfNullableOfint $Id
     * @return CompanyCriteria
     */
    public function setId($Id)
    {
      $this->Id = $Id;
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
     * @return CompanyCriteria
     */
    public function setModifiedDate($ModifiedDate)
    {
      $this->ModifiedDate = $ModifiedDate;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param LikeRestrictionOfstring $Name
     * @return CompanyCriteria
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
