<?php

class ServiceDocumentCriteria extends Criteria
{

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
     * @var LikeRestrictionOfstring $Id
     */
    protected $Id = null;

    /**
     * @var LikeRestrictionOfstring $OfficeId
     */
    protected $OfficeId = null;

    /**
     * @var ListRestrictionOfNullableOfServiceTransactionState $TransactionState
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
     * @return ServiceDocumentCriteria
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
     * @return ServiceDocumentCriteria
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
     * @return ServiceDocumentCriteria
     */
    public function setCustomerPONumber($CustomerPONumber)
    {
      $this->CustomerPONumber = $CustomerPONumber;
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
     * @return ServiceDocumentCriteria
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getOfficeId()
    {
      return $this->OfficeId;
    }

    /**
     * @param LikeRestrictionOfstring $OfficeId
     * @return ServiceDocumentCriteria
     */
    public function setOfficeId($OfficeId)
    {
      $this->OfficeId = $OfficeId;
      return $this;
    }

    /**
     * @return ListRestrictionOfNullableOfServiceTransactionState
     */
    public function getTransactionState()
    {
      return $this->TransactionState;
    }

    /**
     * @param ListRestrictionOfNullableOfServiceTransactionState $TransactionState
     * @return ServiceDocumentCriteria
     */
    public function setTransactionState($TransactionState)
    {
      $this->TransactionState = $TransactionState;
      return $this;
    }

}
