<?php

class ProjectMiscellaneousLogCriteria extends Criteria
{

    /**
     * @var BetweenRestrictionOfNullableOfdateTime $Date
     */
    protected $Date = null;

    /**
     * @var LikeRestrictionOfstring $Id
     */
    protected $Id = null;

    /**
     * @var LikeRestrictionOfstring $MiscellaneousId
     */
    protected $MiscellaneousId = null;

    /**
     * @var ListRestrictionOfNullableOfProjectTransactionState $TransactionState
     */
    protected $TransactionState = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return ProjectMiscellaneousLogCriteria
     */
    public function setDate($Date)
    {
      $this->Date = $Date;
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
     * @return ProjectMiscellaneousLogCriteria
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getMiscellaneousId()
    {
      return $this->MiscellaneousId;
    }

    /**
     * @param LikeRestrictionOfstring $MiscellaneousId
     * @return ProjectMiscellaneousLogCriteria
     */
    public function setMiscellaneousId($MiscellaneousId)
    {
      $this->MiscellaneousId = $MiscellaneousId;
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
     * @return ProjectMiscellaneousLogCriteria
     */
    public function setTransactionState($TransactionState)
    {
      $this->TransactionState = $TransactionState;
      return $this;
    }

}
