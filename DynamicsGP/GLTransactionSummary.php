<?php

class GLTransactionSummary
{

    /**
     * @var BatchKey $BatchKey
     */
    protected $BatchKey = null;

    /**
     * @var CurrencyKey $CurrencyKey
     */
    protected $CurrencyKey = null;

    /**
     * @var GLTransactionKey $Key
     */
    protected $Key = null;

    /**
     * @var GLLedgerType $LedgerType
     */
    protected $LedgerType = null;

    /**
     * @var \DateTime $ModifiedDate
     */
    protected $ModifiedDate = null;

    /**
     * @var string $Reference
     */
    protected $Reference = null;

    /**
     * @var SourceDocumentKey $SourceDocumentKey
     */
    protected $SourceDocumentKey = null;

    /**
     * @var GLTransactionState $TransactionState
     */
    protected $TransactionState = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BatchKey
     */
    public function getBatchKey()
    {
      return $this->BatchKey;
    }

    /**
     * @param BatchKey $BatchKey
     * @return GLTransactionSummary
     */
    public function setBatchKey($BatchKey)
    {
      $this->BatchKey = $BatchKey;
      return $this;
    }

    /**
     * @return CurrencyKey
     */
    public function getCurrencyKey()
    {
      return $this->CurrencyKey;
    }

    /**
     * @param CurrencyKey $CurrencyKey
     * @return GLTransactionSummary
     */
    public function setCurrencyKey($CurrencyKey)
    {
      $this->CurrencyKey = $CurrencyKey;
      return $this;
    }

    /**
     * @return GLTransactionKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param GLTransactionKey $Key
     * @return GLTransactionSummary
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return GLLedgerType
     */
    public function getLedgerType()
    {
      return $this->LedgerType;
    }

    /**
     * @param GLLedgerType $LedgerType
     * @return GLTransactionSummary
     */
    public function setLedgerType($LedgerType)
    {
      $this->LedgerType = $LedgerType;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getModifiedDate()
    {
      if ($this->ModifiedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ModifiedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ModifiedDate
     * @return GLTransactionSummary
     */
    public function setModifiedDate(\DateTime $ModifiedDate = null)
    {
      if ($ModifiedDate == null) {
       $this->ModifiedDate = null;
      } else {
        $this->ModifiedDate = $ModifiedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getReference()
    {
      return $this->Reference;
    }

    /**
     * @param string $Reference
     * @return GLTransactionSummary
     */
    public function setReference($Reference)
    {
      $this->Reference = $Reference;
      return $this;
    }

    /**
     * @return SourceDocumentKey
     */
    public function getSourceDocumentKey()
    {
      return $this->SourceDocumentKey;
    }

    /**
     * @param SourceDocumentKey $SourceDocumentKey
     * @return GLTransactionSummary
     */
    public function setSourceDocumentKey($SourceDocumentKey)
    {
      $this->SourceDocumentKey = $SourceDocumentKey;
      return $this;
    }

    /**
     * @return GLTransactionState
     */
    public function getTransactionState()
    {
      return $this->TransactionState;
    }

    /**
     * @param GLTransactionState $TransactionState
     * @return GLTransactionSummary
     */
    public function setTransactionState($TransactionState)
    {
      $this->TransactionState = $TransactionState;
      return $this;
    }

}
