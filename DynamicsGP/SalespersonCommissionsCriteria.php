<?php

class SalespersonCommissionsCriteria extends Criteria
{

    /**
     * @var LikeRestrictionOfstring $CustomerId
     */
    protected $CustomerId = null;

    /**
     * @var LikeRestrictionOfstring $DocumentNumber
     */
    protected $DocumentNumber = null;

    /**
     * @var ListRestrictionOfNullableOfSalespersonCommissionsDocumentType $DocumentType
     */
    protected $DocumentType = null;

    /**
     * @var LikeRestrictionOfstring $SalesTerritoryId
     */
    protected $SalesTerritoryId = null;

    /**
     * @var LikeRestrictionOfstring $SalespersonId
     */
    protected $SalespersonId = null;

    /**
     * @var SalespersonScope $Scope
     */
    protected $Scope = null;

    /**
     * @var ListRestrictionOfNullableOfSalesCommissionTransactionState $TransactionState
     */
    protected $TransactionState = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return SalespersonCommissionsCriteria
     */
    public function setCustomerId($CustomerId)
    {
      $this->CustomerId = $CustomerId;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getDocumentNumber()
    {
      return $this->DocumentNumber;
    }

    /**
     * @param LikeRestrictionOfstring $DocumentNumber
     * @return SalespersonCommissionsCriteria
     */
    public function setDocumentNumber($DocumentNumber)
    {
      $this->DocumentNumber = $DocumentNumber;
      return $this;
    }

    /**
     * @return ListRestrictionOfNullableOfSalespersonCommissionsDocumentType
     */
    public function getDocumentType()
    {
      return $this->DocumentType;
    }

    /**
     * @param ListRestrictionOfNullableOfSalespersonCommissionsDocumentType $DocumentType
     * @return SalespersonCommissionsCriteria
     */
    public function setDocumentType($DocumentType)
    {
      $this->DocumentType = $DocumentType;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getSalesTerritoryId()
    {
      return $this->SalesTerritoryId;
    }

    /**
     * @param LikeRestrictionOfstring $SalesTerritoryId
     * @return SalespersonCommissionsCriteria
     */
    public function setSalesTerritoryId($SalesTerritoryId)
    {
      $this->SalesTerritoryId = $SalesTerritoryId;
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
     * @return SalespersonCommissionsCriteria
     */
    public function setSalespersonId($SalespersonId)
    {
      $this->SalespersonId = $SalespersonId;
      return $this;
    }

    /**
     * @return SalespersonScope
     */
    public function getScope()
    {
      return $this->Scope;
    }

    /**
     * @param SalespersonScope $Scope
     * @return SalespersonCommissionsCriteria
     */
    public function setScope($Scope)
    {
      $this->Scope = $Scope;
      return $this;
    }

    /**
     * @return ListRestrictionOfNullableOfSalesCommissionTransactionState
     */
    public function getTransactionState()
    {
      return $this->TransactionState;
    }

    /**
     * @param ListRestrictionOfNullableOfSalesCommissionTransactionState $TransactionState
     * @return SalespersonCommissionsCriteria
     */
    public function setTransactionState($TransactionState)
    {
      $this->TransactionState = $TransactionState;
      return $this;
    }

}
