<?php

class GLTransaction extends BusinessObject
{

    /**
     * @var string $AuditTrailCode
     */
    protected $AuditTrailCode = null;

    /**
     * @var BatchKey $BatchKey
     */
    protected $BatchKey = null;

    /**
     * @var CurrencyKey $CurrencyKey
     */
    protected $CurrencyKey = null;

    /**
     * @var \DateTime $ExchangeDate
     */
    protected $ExchangeDate = null;

    /**
     * @var float $ExchangeRate
     */
    protected $ExchangeRate = null;

    /**
     * @var GLIntercompany $Intercompany
     */
    protected $Intercompany = null;

    /**
     * @var boolean $IsVoided
     */
    protected $IsVoided = null;

    /**
     * @var GLTransactionKey $Key
     */
    protected $Key = null;

    /**
     * @var GLLedgerType $LedgerType
     */
    protected $LedgerType = null;

    /**
     * @var ArrayOfGLTransactionLine $Lines
     */
    protected $Lines = null;

    /**
     * @var string $ModifiedBy
     */
    protected $ModifiedBy = null;

    /**
     * @var \DateTime $ModifiedDate
     */
    protected $ModifiedDate = null;

    /**
     * @var GLOriginatingDocument $OriginatingDocument
     */
    protected $OriginatingDocument = null;

    /**
     * @var string $PostedBy
     */
    protected $PostedBy = null;

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
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getAuditTrailCode()
    {
      return $this->AuditTrailCode;
    }

    /**
     * @param string $AuditTrailCode
     * @return GLTransaction
     */
    public function setAuditTrailCode($AuditTrailCode)
    {
      $this->AuditTrailCode = $AuditTrailCode;
      return $this;
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
     * @return GLTransaction
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
     * @return GLTransaction
     */
    public function setCurrencyKey($CurrencyKey)
    {
      $this->CurrencyKey = $CurrencyKey;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExchangeDate()
    {
      if ($this->ExchangeDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ExchangeDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ExchangeDate
     * @return GLTransaction
     */
    public function setExchangeDate(\DateTime $ExchangeDate = null)
    {
      if ($ExchangeDate == null) {
       $this->ExchangeDate = null;
      } else {
        $this->ExchangeDate = $ExchangeDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return float
     */
    public function getExchangeRate()
    {
      return $this->ExchangeRate;
    }

    /**
     * @param float $ExchangeRate
     * @return GLTransaction
     */
    public function setExchangeRate($ExchangeRate)
    {
      $this->ExchangeRate = $ExchangeRate;
      return $this;
    }

    /**
     * @return GLIntercompany
     */
    public function getIntercompany()
    {
      return $this->Intercompany;
    }

    /**
     * @param GLIntercompany $Intercompany
     * @return GLTransaction
     */
    public function setIntercompany($Intercompany)
    {
      $this->Intercompany = $Intercompany;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsVoided()
    {
      return $this->IsVoided;
    }

    /**
     * @param boolean $IsVoided
     * @return GLTransaction
     */
    public function setIsVoided($IsVoided)
    {
      $this->IsVoided = $IsVoided;
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
     * @return GLTransaction
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
     * @return GLTransaction
     */
    public function setLedgerType($LedgerType)
    {
      $this->LedgerType = $LedgerType;
      return $this;
    }

    /**
     * @return ArrayOfGLTransactionLine
     */
    public function getLines()
    {
      return $this->Lines;
    }

    /**
     * @param ArrayOfGLTransactionLine $Lines
     * @return GLTransaction
     */
    public function setLines($Lines)
    {
      $this->Lines = $Lines;
      return $this;
    }

    /**
     * @return string
     */
    public function getModifiedBy()
    {
      return $this->ModifiedBy;
    }

    /**
     * @param string $ModifiedBy
     * @return GLTransaction
     */
    public function setModifiedBy($ModifiedBy)
    {
      $this->ModifiedBy = $ModifiedBy;
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
     * @return GLTransaction
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
     * @return GLOriginatingDocument
     */
    public function getOriginatingDocument()
    {
      return $this->OriginatingDocument;
    }

    /**
     * @param GLOriginatingDocument $OriginatingDocument
     * @return GLTransaction
     */
    public function setOriginatingDocument($OriginatingDocument)
    {
      $this->OriginatingDocument = $OriginatingDocument;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostedBy()
    {
      return $this->PostedBy;
    }

    /**
     * @param string $PostedBy
     * @return GLTransaction
     */
    public function setPostedBy($PostedBy)
    {
      $this->PostedBy = $PostedBy;
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
     * @return GLTransaction
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
     * @return GLTransaction
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
     * @return GLTransaction
     */
    public function setTransactionState($TransactionState)
    {
      $this->TransactionState = $TransactionState;
      return $this;
    }

}
