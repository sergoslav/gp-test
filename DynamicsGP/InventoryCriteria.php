<?php

class InventoryCriteria extends Criteria
{

    /**
     * @var LikeRestrictionOfstring $BatchId
     */
    protected $BatchId = null;

    /**
     * @var BetweenRestrictionOfNullableOfdateTime $CreatedDate
     */
    protected $CreatedDate = null;

    /**
     * @var BetweenRestrictionOfNullableOfdateTime $Date
     */
    protected $Date = null;

    /**
     * @var LikeRestrictionOfstring $InventoryId
     */
    protected $InventoryId = null;

    /**
     * @var BetweenRestrictionOfNullableOfdateTime $ModifiedDate
     */
    protected $ModifiedDate = null;

    /**
     * @var ListRestrictionOfNullableOfInventoryTransactionState $TransactionState
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
     * @return InventoryCriteria
     */
    public function setBatchId($BatchId)
    {
      $this->BatchId = $BatchId;
      return $this;
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
     * @return InventoryCriteria
     */
    public function setCreatedDate($CreatedDate)
    {
      $this->CreatedDate = $CreatedDate;
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
     * @return InventoryCriteria
     */
    public function setDate($Date)
    {
      $this->Date = $Date;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getInventoryId()
    {
      return $this->InventoryId;
    }

    /**
     * @param LikeRestrictionOfstring $InventoryId
     * @return InventoryCriteria
     */
    public function setInventoryId($InventoryId)
    {
      $this->InventoryId = $InventoryId;
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
     * @return InventoryCriteria
     */
    public function setModifiedDate($ModifiedDate)
    {
      $this->ModifiedDate = $ModifiedDate;
      return $this;
    }

    /**
     * @return ListRestrictionOfNullableOfInventoryTransactionState
     */
    public function getTransactionState()
    {
      return $this->TransactionState;
    }

    /**
     * @param ListRestrictionOfNullableOfInventoryTransactionState $TransactionState
     * @return InventoryCriteria
     */
    public function setTransactionState($TransactionState)
    {
      $this->TransactionState = $TransactionState;
      return $this;
    }

}
