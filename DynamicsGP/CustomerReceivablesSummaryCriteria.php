<?php

class CustomerReceivablesSummaryCriteria extends Criteria
{

    /**
     * @var LikeRestrictionOfstring $CustomerId
     */
    protected $CustomerId = null;

    /**
     * @var BetweenRestrictionOfNullableOfdateTime $LastAgedDate
     */
    protected $LastAgedDate = null;

    /**
     * @var BetweenRestrictionOfNullableOfdateTime $LastPaymentDate
     */
    protected $LastPaymentDate = null;

    /**
     * @var BetweenRestrictionOfNullableOfdateTime $LastTransactionDate
     */
    protected $LastTransactionDate = null;

    /**
     * @var LikeRestrictionOfstring $SalespersonId
     */
    protected $SalespersonId = null;

    /**
     * @var CustomerScope $Scope
     */
    protected $Scope = null;

    
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
     * @return CustomerReceivablesSummaryCriteria
     */
    public function setCustomerId($CustomerId)
    {
      $this->CustomerId = $CustomerId;
      return $this;
    }

    /**
     * @return BetweenRestrictionOfNullableOfdateTime
     */
    public function getLastAgedDate()
    {
      return $this->LastAgedDate;
    }

    /**
     * @param BetweenRestrictionOfNullableOfdateTime $LastAgedDate
     * @return CustomerReceivablesSummaryCriteria
     */
    public function setLastAgedDate($LastAgedDate)
    {
      $this->LastAgedDate = $LastAgedDate;
      return $this;
    }

    /**
     * @return BetweenRestrictionOfNullableOfdateTime
     */
    public function getLastPaymentDate()
    {
      return $this->LastPaymentDate;
    }

    /**
     * @param BetweenRestrictionOfNullableOfdateTime $LastPaymentDate
     * @return CustomerReceivablesSummaryCriteria
     */
    public function setLastPaymentDate($LastPaymentDate)
    {
      $this->LastPaymentDate = $LastPaymentDate;
      return $this;
    }

    /**
     * @return BetweenRestrictionOfNullableOfdateTime
     */
    public function getLastTransactionDate()
    {
      return $this->LastTransactionDate;
    }

    /**
     * @param BetweenRestrictionOfNullableOfdateTime $LastTransactionDate
     * @return CustomerReceivablesSummaryCriteria
     */
    public function setLastTransactionDate($LastTransactionDate)
    {
      $this->LastTransactionDate = $LastTransactionDate;
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
     * @return CustomerReceivablesSummaryCriteria
     */
    public function setSalespersonId($SalespersonId)
    {
      $this->SalespersonId = $SalespersonId;
      return $this;
    }

    /**
     * @return CustomerScope
     */
    public function getScope()
    {
      return $this->Scope;
    }

    /**
     * @param CustomerScope $Scope
     * @return CustomerReceivablesSummaryCriteria
     */
    public function setScope($Scope)
    {
      $this->Scope = $Scope;
      return $this;
    }

}
