<?php

class ApplicantCriteria extends Criteria
{

    /**
     * @var LikeRestrictionOfNullableOfint $ApplicantKeyId
     */
    protected $ApplicantKeyId = null;

    /**
     * @var ListRestrictionOfNullableOfApplicationStatus $ApplicationStatus
     */
    protected $ApplicationStatus = null;

    /**
     * @var LikeRestrictionOfstring $DepartmentKeyId
     */
    protected $DepartmentKeyId = null;

    /**
     * @var LikeRestrictionOfstring $DivisionKeyId
     */
    protected $DivisionKeyId = null;

    /**
     * @var LikeRestrictionOfstring $FirstName
     */
    protected $FirstName = null;

    /**
     * @var BetweenRestrictionOfNullableOfdateTime $LastModifiedDate
     */
    protected $LastModifiedDate = null;

    /**
     * @var LikeRestrictionOfstring $LastName
     */
    protected $LastName = null;

    /**
     * @var LikeRestrictionOfstring $PositionKeyId
     */
    protected $PositionKeyId = null;

    /**
     * @var LikeRestrictionOfNullableOfint $RequisitionKeyId
     */
    protected $RequisitionKeyId = null;

    
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
     * @return ApplicantCriteria
     */
    public function setApplicantKeyId($ApplicantKeyId)
    {
      $this->ApplicantKeyId = $ApplicantKeyId;
      return $this;
    }

    /**
     * @return ListRestrictionOfNullableOfApplicationStatus
     */
    public function getApplicationStatus()
    {
      return $this->ApplicationStatus;
    }

    /**
     * @param ListRestrictionOfNullableOfApplicationStatus $ApplicationStatus
     * @return ApplicantCriteria
     */
    public function setApplicationStatus($ApplicationStatus)
    {
      $this->ApplicationStatus = $ApplicationStatus;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getDepartmentKeyId()
    {
      return $this->DepartmentKeyId;
    }

    /**
     * @param LikeRestrictionOfstring $DepartmentKeyId
     * @return ApplicantCriteria
     */
    public function setDepartmentKeyId($DepartmentKeyId)
    {
      $this->DepartmentKeyId = $DepartmentKeyId;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getDivisionKeyId()
    {
      return $this->DivisionKeyId;
    }

    /**
     * @param LikeRestrictionOfstring $DivisionKeyId
     * @return ApplicantCriteria
     */
    public function setDivisionKeyId($DivisionKeyId)
    {
      $this->DivisionKeyId = $DivisionKeyId;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getFirstName()
    {
      return $this->FirstName;
    }

    /**
     * @param LikeRestrictionOfstring $FirstName
     * @return ApplicantCriteria
     */
    public function setFirstName($FirstName)
    {
      $this->FirstName = $FirstName;
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
     * @return ApplicantCriteria
     */
    public function setLastModifiedDate($LastModifiedDate)
    {
      $this->LastModifiedDate = $LastModifiedDate;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getLastName()
    {
      return $this->LastName;
    }

    /**
     * @param LikeRestrictionOfstring $LastName
     * @return ApplicantCriteria
     */
    public function setLastName($LastName)
    {
      $this->LastName = $LastName;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getPositionKeyId()
    {
      return $this->PositionKeyId;
    }

    /**
     * @param LikeRestrictionOfstring $PositionKeyId
     * @return ApplicantCriteria
     */
    public function setPositionKeyId($PositionKeyId)
    {
      $this->PositionKeyId = $PositionKeyId;
      return $this;
    }

    /**
     * @return LikeRestrictionOfNullableOfint
     */
    public function getRequisitionKeyId()
    {
      return $this->RequisitionKeyId;
    }

    /**
     * @param LikeRestrictionOfNullableOfint $RequisitionKeyId
     * @return ApplicantCriteria
     */
    public function setRequisitionKeyId($RequisitionKeyId)
    {
      $this->RequisitionKeyId = $RequisitionKeyId;
      return $this;
    }

}
