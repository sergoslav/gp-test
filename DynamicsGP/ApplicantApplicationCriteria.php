<?php

class ApplicantApplicationCriteria extends Criteria
{

    /**
     * @var LikeRestrictionOfNullableOfint $ApplicantKeyId
     */
    protected $ApplicantKeyId = null;

    /**
     * @var BetweenRestrictionOfNullableOfdateTime $DateApplied
     */
    protected $DateApplied = null;

    /**
     * @var LikeRestrictionOfstring $DepartmentKeyId
     */
    protected $DepartmentKeyId = null;

    /**
     * @var LikeRestrictionOfstring $DivisionKeyId
     */
    protected $DivisionKeyId = null;

    /**
     * @var LikeRestrictionOfstring $PositionKeyId
     */
    protected $PositionKeyId = null;

    /**
     * @var LikeRestrictionOfstring $RequisitionKeyId
     */
    protected $RequisitionKeyId = null;

    /**
     * @var LikeRestrictionOfNullableOfint $SequenceKeyId
     */
    protected $SequenceKeyId = null;

    /**
     * @var ListRestrictionOfNullableOfApplicationStatus $Status
     */
    protected $Status = null;

    
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
     * @return ApplicantApplicationCriteria
     */
    public function setApplicantKeyId($ApplicantKeyId)
    {
      $this->ApplicantKeyId = $ApplicantKeyId;
      return $this;
    }

    /**
     * @return BetweenRestrictionOfNullableOfdateTime
     */
    public function getDateApplied()
    {
      return $this->DateApplied;
    }

    /**
     * @param BetweenRestrictionOfNullableOfdateTime $DateApplied
     * @return ApplicantApplicationCriteria
     */
    public function setDateApplied($DateApplied)
    {
      $this->DateApplied = $DateApplied;
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
     * @return ApplicantApplicationCriteria
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
     * @return ApplicantApplicationCriteria
     */
    public function setDivisionKeyId($DivisionKeyId)
    {
      $this->DivisionKeyId = $DivisionKeyId;
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
     * @return ApplicantApplicationCriteria
     */
    public function setPositionKeyId($PositionKeyId)
    {
      $this->PositionKeyId = $PositionKeyId;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getRequisitionKeyId()
    {
      return $this->RequisitionKeyId;
    }

    /**
     * @param LikeRestrictionOfstring $RequisitionKeyId
     * @return ApplicantApplicationCriteria
     */
    public function setRequisitionKeyId($RequisitionKeyId)
    {
      $this->RequisitionKeyId = $RequisitionKeyId;
      return $this;
    }

    /**
     * @return LikeRestrictionOfNullableOfint
     */
    public function getSequenceKeyId()
    {
      return $this->SequenceKeyId;
    }

    /**
     * @param LikeRestrictionOfNullableOfint $SequenceKeyId
     * @return ApplicantApplicationCriteria
     */
    public function setSequenceKeyId($SequenceKeyId)
    {
      $this->SequenceKeyId = $SequenceKeyId;
      return $this;
    }

    /**
     * @return ListRestrictionOfNullableOfApplicationStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param ListRestrictionOfNullableOfApplicationStatus $Status
     * @return ApplicantApplicationCriteria
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}
