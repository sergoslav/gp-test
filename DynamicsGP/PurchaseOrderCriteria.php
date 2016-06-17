<?php

class PurchaseOrderCriteria extends Criteria
{

    /**
     * @var LikeRestrictionOfstring $BuyerId
     */
    protected $BuyerId = null;

    /**
     * @var BetweenRestrictionOfNullableOfdateTime $CreatedDate
     */
    protected $CreatedDate = null;

    /**
     * @var BetweenRestrictionOfNullableOfdateTime $Date
     */
    protected $Date = null;

    /**
     * @var LikeRestrictionOfstring $Id
     */
    protected $Id = null;

    /**
     * @var BetweenRestrictionOfNullableOfdateTime $ModifiedDate
     */
    protected $ModifiedDate = null;

    /**
     * @var VendorScope $Scope
     */
    protected $Scope = null;

    /**
     * @var ListRestrictionOfNullableOfPurchaseOrderStatus $Status
     */
    protected $Status = null;

    /**
     * @var ListRestrictionOfNullableOfPurchaseTransactionState $TransactionState
     */
    protected $TransactionState = null;

    /**
     * @var LikeRestrictionOfstring $VendorId
     */
    protected $VendorId = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getBuyerId()
    {
      return $this->BuyerId;
    }

    /**
     * @param LikeRestrictionOfstring $BuyerId
     * @return PurchaseOrderCriteria
     */
    public function setBuyerId($BuyerId)
    {
      $this->BuyerId = $BuyerId;
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
     * @return PurchaseOrderCriteria
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
     * @return PurchaseOrderCriteria
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
     * @return PurchaseOrderCriteria
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
     * @return PurchaseOrderCriteria
     */
    public function setModifiedDate($ModifiedDate)
    {
      $this->ModifiedDate = $ModifiedDate;
      return $this;
    }

    /**
     * @return VendorScope
     */
    public function getScope()
    {
      return $this->Scope;
    }

    /**
     * @param VendorScope $Scope
     * @return PurchaseOrderCriteria
     */
    public function setScope($Scope)
    {
      $this->Scope = $Scope;
      return $this;
    }

    /**
     * @return ListRestrictionOfNullableOfPurchaseOrderStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param ListRestrictionOfNullableOfPurchaseOrderStatus $Status
     * @return PurchaseOrderCriteria
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return ListRestrictionOfNullableOfPurchaseTransactionState
     */
    public function getTransactionState()
    {
      return $this->TransactionState;
    }

    /**
     * @param ListRestrictionOfNullableOfPurchaseTransactionState $TransactionState
     * @return PurchaseOrderCriteria
     */
    public function setTransactionState($TransactionState)
    {
      $this->TransactionState = $TransactionState;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getVendorId()
    {
      return $this->VendorId;
    }

    /**
     * @param LikeRestrictionOfstring $VendorId
     * @return PurchaseOrderCriteria
     */
    public function setVendorId($VendorId)
    {
      $this->VendorId = $VendorId;
      return $this;
    }

}
