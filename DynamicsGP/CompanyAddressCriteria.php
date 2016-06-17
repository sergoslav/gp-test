<?php

class CompanyAddressCriteria extends Criteria
{

    /**
     * @var LikeRestrictionOfstring $ContactPerson
     */
    protected $ContactPerson = null;

    /**
     * @var LikeRestrictionOfstring $Id
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
     * @return LikeRestrictionOfstring
     */
    public function getContactPerson()
    {
      return $this->ContactPerson;
    }

    /**
     * @param LikeRestrictionOfstring $ContactPerson
     * @return CompanyAddressCriteria
     */
    public function setContactPerson($ContactPerson)
    {
      $this->ContactPerson = $ContactPerson;
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
     * @return CompanyAddressCriteria
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
     * @return CompanyAddressCriteria
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
     * @return CompanyAddressCriteria
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
