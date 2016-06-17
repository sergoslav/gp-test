<?php

class SalesDocumentCriteriaBase extends Criteria
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
     * @var LikeRestrictionOfstring $CustomerId
     */
    protected $CustomerId = null;

    /**
     * @var LikeRestrictionOfstring $CustomerName
     */
    protected $CustomerName = null;

    /**
     * @var LikeRestrictionOfstring $CustomerPONumber
     */
    protected $CustomerPONumber = null;

    /**
     * @var BetweenRestrictionOfNullableOfdateTime $Date
     */
    protected $Date = null;

    /**
     * @var LikeRestrictionOfstring $DocumentId
     */
    protected $DocumentId = null;

    /**
     * @var LikeRestrictionOfstring $DocumentTypeId
     */
    protected $DocumentTypeId = null;

    /**
     * @var BetweenRestrictionOfNullableOfdateTime $LastModifiedDate
     */
    protected $LastModifiedDate = null;

    /**
     * @var BetweenRestrictionOfNullableOfint $MasterNumber
     */
    protected $MasterNumber = null;

    /**
     * @var BetweenRestrictionOfNullableOfdateTime $ModifiedDate
     */
    protected $ModifiedDate = null;

    /**
     * @var LikeRestrictionOfstring $SalespersonId
     */
    protected $SalespersonId = null;

    /**
     * @var SalesDocumentScope $Scope
     */
    protected $Scope = null;

    /**
     * @var ListRestrictionOfNullableOfSalesTransactionState $TransactionState
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
     * @return SalesDocumentCriteriaBase
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
     * @return SalesDocumentCriteriaBase
     */
    public function setCreatedDate($CreatedDate)
    {
      $this->CreatedDate = $CreatedDate;
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
     * @return SalesDocumentCriteriaBase
     */
    public function setCustomerId($CustomerId)
    {
      $this->CustomerId = $CustomerId;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getCustomerName()
    {
      return $this->CustomerName;
    }

    /**
     * @param LikeRestrictionOfstring $CustomerName
     * @return SalesDocumentCriteriaBase
     */
    public function setCustomerName($CustomerName)
    {
      $this->CustomerName = $CustomerName;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getCustomerPONumber()
    {
      return $this->CustomerPONumber;
    }

    /**
     * @param LikeRestrictionOfstring $CustomerPONumber
     * @return SalesDocumentCriteriaBase
     */
    public function setCustomerPONumber($CustomerPONumber)
    {
      $this->CustomerPONumber = $CustomerPONumber;
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
     * @return SalesDocumentCriteriaBase
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
     * @return SalesDocumentCriteriaBase
     */
    public function setDocumentId($DocumentId)
    {
      $this->DocumentId = $DocumentId;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getDocumentTypeId()
    {
      return $this->DocumentTypeId;
    }

    /**
     * @param LikeRestrictionOfstring $DocumentTypeId
     * @return SalesDocumentCriteriaBase
     */
    public function setDocumentTypeId($DocumentTypeId)
    {
      $this->DocumentTypeId = $DocumentTypeId;
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
     * @return SalesDocumentCriteriaBase
     */
    public function setLastModifiedDate($LastModifiedDate)
    {
      $this->LastModifiedDate = $LastModifiedDate;
      return $this;
    }

    /**
     * @return BetweenRestrictionOfNullableOfint
     */
    public function getMasterNumber()
    {
      return $this->MasterNumber;
    }

    /**
     * @param BetweenRestrictionOfNullableOfint $MasterNumber
     * @return SalesDocumentCriteriaBase
     */
    public function setMasterNumber($MasterNumber)
    {
      $this->MasterNumber = $MasterNumber;
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
     * @return SalesDocumentCriteriaBase
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
     * @return SalesDocumentCriteriaBase
     */
    public function setSalespersonId($SalespersonId)
    {
      $this->SalespersonId = $SalespersonId;
      return $this;
    }

    /**
     * @return SalesDocumentScope
     */
    public function getScope()
    {
      return $this->Scope;
    }

    /**
     * @param SalesDocumentScope $Scope
     * @return SalesDocumentCriteriaBase
     */
    public function setScope($Scope)
    {
      $this->Scope = $Scope;
      return $this;
    }

    /**
     * @return ListRestrictionOfNullableOfSalesTransactionState
     */
    public function getTransactionState()
    {
      return $this->TransactionState;
    }

    /**
     * @param ListRestrictionOfNullableOfSalesTransactionState $TransactionState
     * @return SalesDocumentCriteriaBase
     */
    public function setTransactionState($TransactionState)
    {
      $this->TransactionState = $TransactionState;
      return $this;
    }

}
