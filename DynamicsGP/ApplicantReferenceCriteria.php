<?php

class ApplicantReferenceCriteria extends Criteria
{

    /**
     * @var LikeRestrictionOfNullableOfint $ApplicantKeyId
     */
    protected $ApplicantKeyId = null;

    /**
     * @var LikeRestrictionOfstring $CompanyName
     */
    protected $CompanyName = null;

    /**
     * @var BetweenRestrictionOfNullableOfdateTime $LastModifiedDate
     */
    protected $LastModifiedDate = null;

    /**
     * @var LikeRestrictionOfstring $ReferenceName
     */
    protected $ReferenceName = null;

    /**
     * @var LikeRestrictionOfstring $Relationship
     */
    protected $Relationship = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return LikeRestrictionOfNullableOfint
     */
    public function getApplicantKeyId()
    {
      return $this->ApplicantKeyId;
    }

    /**
     * @param LikeRestrictionOfNullableOfint $ApplicantKeyId
     * @return ApplicantReferenceCriteria
     */
    public function setApplicantKeyId($ApplicantKeyId)
    {
      $this->ApplicantKeyId = $ApplicantKeyId;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getCompanyName()
    {
      return $this->CompanyName;
    }

    /**
     * @param LikeRestrictionOfstring $CompanyName
     * @return ApplicantReferenceCriteria
     */
    public function setCompanyName($CompanyName)
    {
      $this->CompanyName = $CompanyName;
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
     * @return ApplicantReferenceCriteria
     */
    public function setLastModifiedDate($LastModifiedDate)
    {
      $this->LastModifiedDate = $LastModifiedDate;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getReferenceName()
    {
      return $this->ReferenceName;
    }

    /**
     * @param LikeRestrictionOfstring $ReferenceName
     * @return ApplicantReferenceCriteria
     */
    public function setReferenceName($ReferenceName)
    {
      $this->ReferenceName = $ReferenceName;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getRelationship()
    {
      return $this->Relationship;
    }

    /**
     * @param LikeRestrictionOfstring $Relationship
     * @return ApplicantReferenceCriteria
     */
    public function setRelationship($Relationship)
    {
      $this->Relationship = $Relationship;
      return $this;
    }

}
