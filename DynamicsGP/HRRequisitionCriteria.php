<?php

class HRRequisitionCriteria extends Criteria
{

    /**
     * @var LikeRestrictionOfstring $CompanyKey
     */
    protected $CompanyKey = null;

    /**
     * @var BetweenRestrictionOfNullableOfdateTime $InternalCloseDate
     */
    protected $InternalCloseDate = null;

    /**
     * @var BetweenRestrictionOfNullableOfdateTime $InternalPostDate
     */
    protected $InternalPostDate = null;

    /**
     * @var BetweenRestrictionOfNullableOfdateTime $LastModifiedDate
     */
    protected $LastModifiedDate = null;

    /**
     * @var LikeRestrictionOfstring $ManagerKey
     */
    protected $ManagerKey = null;

    /**
     * @var BetweenRestrictionOfNullableOfdateTime $OpeningDate
     */
    protected $OpeningDate = null;

    /**
     * @var BetweenRestrictionOfNullableOfint $RequisitionNumber
     */
    protected $RequisitionNumber = null;

    /**
     * @var ListRestrictionOfNullableOfHRRequisitionStatus $Status
     */
    protected $Status = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getCompanyKey()
    {
      return $this->CompanyKey;
    }

    /**
     * @param LikeRestrictionOfstring $CompanyKey
     * @return HRRequisitionCriteria
     */
    public function setCompanyKey($CompanyKey)
    {
      $this->CompanyKey = $CompanyKey;
      return $this;
    }

    /**
     * @return BetweenRestrictionOfNullableOfdateTime
     */
    public function getInternalCloseDate()
    {
      return $this->InternalCloseDate;
    }

    /**
     * @param BetweenRestrictionOfNullableOfdateTime $InternalCloseDate
     * @return HRRequisitionCriteria
     */
    public function setInternalCloseDate($InternalCloseDate)
    {
      $this->InternalCloseDate = $InternalCloseDate;
      return $this;
    }

    /**
     * @return BetweenRestrictionOfNullableOfdateTime
     */
    public function getInternalPostDate()
    {
      return $this->InternalPostDate;
    }

    /**
     * @param BetweenRestrictionOfNullableOfdateTime $InternalPostDate
     * @return HRRequisitionCriteria
     */
    public function setInternalPostDate($InternalPostDate)
    {
      $this->InternalPostDate = $InternalPostDate;
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
     * @return HRRequisitionCriteria
     */
    public function setLastModifiedDate($LastModifiedDate)
    {
      $this->LastModifiedDate = $LastModifiedDate;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getManagerKey()
    {
      return $this->ManagerKey;
    }

    /**
     * @param LikeRestrictionOfstring $ManagerKey
     * @return HRRequisitionCriteria
     */
    public function setManagerKey($ManagerKey)
    {
      $this->ManagerKey = $ManagerKey;
      return $this;
    }

    /**
     * @return BetweenRestrictionOfNullableOfdateTime
     */
    public function getOpeningDate()
    {
      return $this->OpeningDate;
    }

    /**
     * @param BetweenRestrictionOfNullableOfdateTime $OpeningDate
     * @return HRRequisitionCriteria
     */
    public function setOpeningDate($OpeningDate)
    {
      $this->OpeningDate = $OpeningDate;
      return $this;
    }

    /**
     * @return BetweenRestrictionOfNullableOfint
     */
    public function getRequisitionNumber()
    {
      return $this->RequisitionNumber;
    }

    /**
     * @param BetweenRestrictionOfNullableOfint $RequisitionNumber
     * @return HRRequisitionCriteria
     */
    public function setRequisitionNumber($RequisitionNumber)
    {
      $this->RequisitionNumber = $RequisitionNumber;
      return $this;
    }

    /**
     * @return ListRestrictionOfNullableOfHRRequisitionStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param ListRestrictionOfNullableOfHRRequisitionStatus $Status
     * @return HRRequisitionCriteria
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}
