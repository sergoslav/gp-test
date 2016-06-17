<?php

class GLTransactionCriteria extends Criteria
{

    /**
     * @var LikeRestrictionOfstring $BatchId
     */
    protected $BatchId = null;

    /**
     * @var LikeRestrictionOfstring $CurrencyISOCode
     */
    protected $CurrencyISOCode = null;

    /**
     * @var BetweenRestrictionOfNullableOfdateTime $Date
     */
    protected $Date = null;

    /**
     * @var BetweenRestrictionOfNullableOfint $FiscalYear
     */
    protected $FiscalYear = null;

    /**
     * @var LikeRestrictionOfstring $JournalId
     */
    protected $JournalId = null;

    /**
     * @var ListRestrictionOfNullableOfGLLedgerType $LedgerType
     */
    protected $LedgerType = null;

    /**
     * @var BetweenRestrictionOfNullableOfdateTime $ModifiedDate
     */
    protected $ModifiedDate = null;

    /**
     * @var BetweenRestrictionOfNullableOfint $RecurringTransactionSequence
     */
    protected $RecurringTransactionSequence = null;

    /**
     * @var LikeRestrictionOfstring $SourceDocumentId
     */
    protected $SourceDocumentId = null;

    /**
     * @var ListRestrictionOfNullableOfGLTransactionState $TransactionState
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
     * @return GLTransactionCriteria
     */
    public function setBatchId($BatchId)
    {
      $this->BatchId = $BatchId;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getCurrencyISOCode()
    {
      return $this->CurrencyISOCode;
    }

    /**
     * @param LikeRestrictionOfstring $CurrencyISOCode
     * @return GLTransactionCriteria
     */
    public function setCurrencyISOCode($CurrencyISOCode)
    {
      $this->CurrencyISOCode = $CurrencyISOCode;
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
     * @return GLTransactionCriteria
     */
    public function setDate($Date)
    {
      $this->Date = $Date;
      return $this;
    }

    /**
     * @return BetweenRestrictionOfNullableOfint
     */
    public function getFiscalYear()
    {
      return $this->FiscalYear;
    }

    /**
     * @param BetweenRestrictionOfNullableOfint $FiscalYear
     * @return GLTransactionCriteria
     */
    public function setFiscalYear($FiscalYear)
    {
      $this->FiscalYear = $FiscalYear;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getJournalId()
    {
      return $this->JournalId;
    }

    /**
     * @param LikeRestrictionOfstring $JournalId
     * @return GLTransactionCriteria
     */
    public function setJournalId($JournalId)
    {
      $this->JournalId = $JournalId;
      return $this;
    }

    /**
     * @return ListRestrictionOfNullableOfGLLedgerType
     */
    public function getLedgerType()
    {
      return $this->LedgerType;
    }

    /**
     * @param ListRestrictionOfNullableOfGLLedgerType $LedgerType
     * @return GLTransactionCriteria
     */
    public function setLedgerType($LedgerType)
    {
      $this->LedgerType = $LedgerType;
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
     * @return GLTransactionCriteria
     */
    public function setModifiedDate($ModifiedDate)
    {
      $this->ModifiedDate = $ModifiedDate;
      return $this;
    }

    /**
     * @return BetweenRestrictionOfNullableOfint
     */
    public function getRecurringTransactionSequence()
    {
      return $this->RecurringTransactionSequence;
    }

    /**
     * @param BetweenRestrictionOfNullableOfint $RecurringTransactionSequence
     * @return GLTransactionCriteria
     */
    public function setRecurringTransactionSequence($RecurringTransactionSequence)
    {
      $this->RecurringTransactionSequence = $RecurringTransactionSequence;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getSourceDocumentId()
    {
      return $this->SourceDocumentId;
    }

    /**
     * @param LikeRestrictionOfstring $SourceDocumentId
     * @return GLTransactionCriteria
     */
    public function setSourceDocumentId($SourceDocumentId)
    {
      $this->SourceDocumentId = $SourceDocumentId;
      return $this;
    }

    /**
     * @return ListRestrictionOfNullableOfGLTransactionState
     */
    public function getTransactionState()
    {
      return $this->TransactionState;
    }

    /**
     * @param ListRestrictionOfNullableOfGLTransactionState $TransactionState
     * @return GLTransactionCriteria
     */
    public function setTransactionState($TransactionState)
    {
      $this->TransactionState = $TransactionState;
      return $this;
    }

}
