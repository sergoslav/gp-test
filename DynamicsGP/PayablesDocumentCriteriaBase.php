<?php

class PayablesDocumentCriteriaBase extends Criteria
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
     * @var LikeRestrictionOfstring $DocumentId
     */
    protected $DocumentId = null;

    /**
     * @var BetweenRestrictionOfNullableOfdateTime $ModifiedDate
     */
    protected $ModifiedDate = null;

    /**
     * @var ListRestrictionOfNullableOfPayablesTransactionState $TransactionState
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
    public function getBatchId()
    {
      return $this->BatchId;
    }

    /**
     * @param LikeRestrictionOfstring $BatchId
     * @return PayablesDocumentCriteriaBase
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
     * @return PayablesDocumentCriteriaBase
     */
    public function setDate($Date)
    {
      $this->Date = $Date;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getDocumentId()
    {
      return $this->DocumentId;
    }

    /**
     * @param LikeRestrictionOfstring $DocumentId
     * @return PayablesDocumentCriteriaBase
     */
    public function setDocumentId($DocumentId)
    {
      $this->DocumentId = $DocumentId;
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
     * @return PayablesDocumentCriteriaBase
     */
    public function setModifiedDate($ModifiedDate)
    {
      $this->ModifiedDate = $ModifiedDate;
      return $this;
    }

    /**
     * @return ListRestrictionOfNullableOfPayablesTransactionState
     */
    public function getTransactionState()
    {
      return $this->TransactionState;
    }

    /**
     * @param ListRestrictionOfNullableOfPayablesTransactionState $TransactionState
     * @return PayablesDocumentCriteriaBase
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
     * @return PayablesDocumentCriteriaBase
     */
    public function setVendorId($VendorId)
    {
      $this->VendorId = $VendorId;
      return $this;
    }

}
