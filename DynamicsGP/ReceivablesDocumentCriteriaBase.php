<?php

class ReceivablesDocumentCriteriaBase extends Criteria
{

    /**
     * @var LikeRestrictionOfstring $BatchId
     */
    protected $BatchId = null;

    /**
     * @var LikeRestrictionOfstring $CustomerId
     */
    protected $CustomerId = null;

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
     * @var LikeRestrictionOfstring $SalespersonId
     */
    protected $SalespersonId = null;

    /**
     * @var ReceivablesDocumentScope $Scope
     */
    protected $Scope = null;

    /**
     * @var ListRestrictionOfNullableOfReceivablesTransactionState $TransactionState
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
     * @return ReceivablesDocumentCriteriaBase
     */
    public function setBatchId($BatchId)
    {
      $this->BatchId = $BatchId;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getCustomerId()
    {
      return $this->CustomerId;
    }

    /**
     * @param LikeRestrictionOfstring $CustomerId
     * @return ReceivablesDocumentCriteriaBase
     */
    public function setCustomerId($CustomerId)
    {
      $this->CustomerId = $CustomerId;
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
     * @return ReceivablesDocumentCriteriaBase
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
     * @return ReceivablesDocumentCriteriaBase
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
     * @return ReceivablesDocumentCriteriaBase
     */
    public function setModifiedDate($ModifiedDate)
    {
      $this->ModifiedDate = $ModifiedDate;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getSalespersonId()
    {
      return $this->SalespersonId;
    }

    /**
     * @param LikeRestrictionOfstring $SalespersonId
     * @return ReceivablesDocumentCriteriaBase
     */
    public function setSalespersonId($SalespersonId)
    {
      $this->SalespersonId = $SalespersonId;
      return $this;
    }

    /**
     * @return ReceivablesDocumentScope
     */
    public function getScope()
    {
      return $this->Scope;
    }

    /**
     * @param ReceivablesDocumentScope $Scope
     * @return ReceivablesDocumentCriteriaBase
     */
    public function setScope($Scope)
    {
      $this->Scope = $Scope;
      return $this;
    }

    /**
     * @return ListRestrictionOfNullableOfReceivablesTransactionState
     */
    public function getTransactionState()
    {
      return $this->TransactionState;
    }

    /**
     * @param ListRestrictionOfNullableOfReceivablesTransactionState $TransactionState
     * @return ReceivablesDocumentCriteriaBase
     */
    public function setTransactionState($TransactionState)
    {
      $this->TransactionState = $TransactionState;
      return $this;
    }

}
