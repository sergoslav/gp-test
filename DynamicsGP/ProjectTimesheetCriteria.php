<?php

class ProjectTimesheetCriteria extends Criteria
{

    /**
     * @var LikeRestrictionOfstring $BatchId
     */
    protected $BatchId = null;

    /**
     * @var BetweenRestrictionOfNullableOfdateTime $Date
     */
    protected $Date = null;

    /**
     * @var LikeRestrictionOfstring $EmployeeId
     */
    protected $EmployeeId = null;

    /**
     * @var LikeRestrictionOfstring $Id
     */
    protected $Id = null;

    /**
     * @var ListRestrictionOfNullableOfProjectTransactionState $TransactionState
     */
    protected $TransactionState = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getBatchId()
    {
      return $this->BatchId;
    }

    /**
     * @param LikeRestrictionOfstring $BatchId
     * @return ProjectTimesheetCriteria
     */
    public function setBatchId($BatchId)
    {
      $this->BatchId = $BatchId;
      return $this;
    }

    /**
     * @return BetweenRestrictionOfNullableOfdateTime
     */
    public function getDate()
    {
      return $this->Date;
    }

    /**
     * @param BetweenRestrictionOfNullableOfdateTime $Date
     * @return ProjectTimesheetCriteria
     */
    public function setDate($Date)
    {
      $this->Date = $Date;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getEmployeeId()
    {
      return $this->EmployeeId;
    }

    /**
     * @param LikeRestrictionOfstring $EmployeeId
     * @return ProjectTimesheetCriteria
     */
    public function setEmployeeId($EmployeeId)
    {
      $this->EmployeeId = $EmployeeId;
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
     * @return ProjectTimesheetCriteria
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return ListRestrictionOfNullableOfProjectTransactionState
     */
    public function getTransactionState()
    {
      return $this->TransactionState;
    }

    /**
     * @param ListRestrictionOfNullableOfProjectTransactionState $TransactionState
     * @return ProjectTimesheetCriteria
     */
    public function setTransactionState($TransactionState)
    {
      $this->TransactionState = $TransactionState;
      return $this;
    }

}
