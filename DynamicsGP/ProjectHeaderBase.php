<?php

class ProjectHeaderBase extends BusinessObject
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
     * @var string $Comment
     */
    protected $Comment = null;

    /**
     * @var string $CreatedBy
     */
    protected $CreatedBy = null;

    /**
     * @var \DateTime $CreatedDate
     */
    protected $CreatedDate = null;

    /**
     * @var CurrencyKey $CurrencyKey
     */
    protected $CurrencyKey = null;

    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

    /**
     * @var \DateTime $ExchangeDate
     */
    protected $ExchangeDate = null;

    /**
     * @var float $ExchangeRate
     */
    protected $ExchangeRate = null;

    /**
     * @var \DateTime $GeneralLedgerPostingDate
     */
    protected $GeneralLedgerPostingDate = null;

    /**
     * @var ProjectMiscellaneousLogKey $OriginalDocumentKey
     */
    protected $OriginalDocumentKey = null;

    /**
     * @var string $PostedBy
     */
    protected $PostedBy = null;

    /**
     * @var \DateTime $PostedDate
     */
    protected $PostedDate = null;

    /**
     * @var string $ReferenceDocumentNumber
     */
    protected $ReferenceDocumentNumber = null;

    /**
     * @var string $ReportSuffix
     */
    protected $ReportSuffix = null;

    /**
     * @var MoneyAmount $TotalAccruedRevenue
     */
    protected $TotalAccruedRevenue = null;

    /**
     * @var MoneyAmount $TotalCost
     */
    protected $TotalCost = null;

    /**
     * @var Quantity $TotalQuantity
     */
    protected $TotalQuantity = null;

    /**
     * @var ProjectTransactionState $TransactionState
     */
    protected $TransactionState = null;

    /**
     * @var ProjectTransactionType $TransactionType
     */
    protected $TransactionType = null;

    /**
     * @var string $UserDefined1
     */
    protected $UserDefined1 = null;

    /**
     * @var string $UserDefined2
     */
    protected $UserDefined2 = null;

    /**
     * @var UserKey $UserKey
     */
    protected $UserKey = null;

    
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
     * @return ProjectHeaderBase
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
     * @return ProjectHeaderBase
     */
    public function setBatchKey($BatchKey)
    {
      $this->BatchKey = $BatchKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getComment()
    {
      return $this->Comment;
    }

    /**
     * @param string $Comment
     * @return ProjectHeaderBase
     */
    public function setComment($Comment)
    {
      $this->Comment = $Comment;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreatedBy()
    {
      return $this->CreatedBy;
    }

    /**
     * @param string $CreatedBy
     * @return ProjectHeaderBase
     */
    public function setCreatedBy($CreatedBy)
    {
      $this->CreatedBy = $CreatedBy;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedDate()
    {
      if ($this->CreatedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CreatedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CreatedDate
     * @return ProjectHeaderBase
     */
    public function setCreatedDate(\DateTime $CreatedDate = null)
    {
      if ($CreatedDate == null) {
       $this->CreatedDate = null;
      } else {
        $this->CreatedDate = $CreatedDate->format(\DateTime::ATOM);
      }
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
     * @return ProjectHeaderBase
     */
    public function setCurrencyKey($CurrencyKey)
    {
      $this->CurrencyKey = $CurrencyKey;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
      if ($this->Date == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Date);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Date
     * @return ProjectHeaderBase
     */
    public function setDate(\DateTime $Date = null)
    {
      if ($Date == null) {
       $this->Date = null;
      } else {
        $this->Date = $Date->format(\DateTime::ATOM);
      }
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
     * @return ProjectHeaderBase
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
     * @return ProjectHeaderBase
     */
    public function setExchangeRate($ExchangeRate)
    {
      $this->ExchangeRate = $ExchangeRate;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getGeneralLedgerPostingDate()
    {
      if ($this->GeneralLedgerPostingDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->GeneralLedgerPostingDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $GeneralLedgerPostingDate
     * @return ProjectHeaderBase
     */
    public function setGeneralLedgerPostingDate(\DateTime $GeneralLedgerPostingDate = null)
    {
      if ($GeneralLedgerPostingDate == null) {
       $this->GeneralLedgerPostingDate = null;
      } else {
        $this->GeneralLedgerPostingDate = $GeneralLedgerPostingDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return ProjectMiscellaneousLogKey
     */
    public function getOriginalDocumentKey()
    {
      return $this->OriginalDocumentKey;
    }

    /**
     * @param ProjectMiscellaneousLogKey $OriginalDocumentKey
     * @return ProjectHeaderBase
     */
    public function setOriginalDocumentKey($OriginalDocumentKey)
    {
      $this->OriginalDocumentKey = $OriginalDocumentKey;
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
     * @return ProjectHeaderBase
     */
    public function setPostedBy($PostedBy)
    {
      $this->PostedBy = $PostedBy;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPostedDate()
    {
      if ($this->PostedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->PostedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $PostedDate
     * @return ProjectHeaderBase
     */
    public function setPostedDate(\DateTime $PostedDate = null)
    {
      if ($PostedDate == null) {
       $this->PostedDate = null;
      } else {
        $this->PostedDate = $PostedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getReferenceDocumentNumber()
    {
      return $this->ReferenceDocumentNumber;
    }

    /**
     * @param string $ReferenceDocumentNumber
     * @return ProjectHeaderBase
     */
    public function setReferenceDocumentNumber($ReferenceDocumentNumber)
    {
      $this->ReferenceDocumentNumber = $ReferenceDocumentNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getReportSuffix()
    {
      return $this->ReportSuffix;
    }

    /**
     * @param string $ReportSuffix
     * @return ProjectHeaderBase
     */
    public function setReportSuffix($ReportSuffix)
    {
      $this->ReportSuffix = $ReportSuffix;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getTotalAccruedRevenue()
    {
      return $this->TotalAccruedRevenue;
    }

    /**
     * @param MoneyAmount $TotalAccruedRevenue
     * @return ProjectHeaderBase
     */
    public function setTotalAccruedRevenue($TotalAccruedRevenue)
    {
      $this->TotalAccruedRevenue = $TotalAccruedRevenue;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getTotalCost()
    {
      return $this->TotalCost;
    }

    /**
     * @param MoneyAmount $TotalCost
     * @return ProjectHeaderBase
     */
    public function setTotalCost($TotalCost)
    {
      $this->TotalCost = $TotalCost;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getTotalQuantity()
    {
      return $this->TotalQuantity;
    }

    /**
     * @param Quantity $TotalQuantity
     * @return ProjectHeaderBase
     */
    public function setTotalQuantity($TotalQuantity)
    {
      $this->TotalQuantity = $TotalQuantity;
      return $this;
    }

    /**
     * @return ProjectTransactionState
     */
    public function getTransactionState()
    {
      return $this->TransactionState;
    }

    /**
     * @param ProjectTransactionState $TransactionState
     * @return ProjectHeaderBase
     */
    public function setTransactionState($TransactionState)
    {
      $this->TransactionState = $TransactionState;
      return $this;
    }

    /**
     * @return ProjectTransactionType
     */
    public function getTransactionType()
    {
      return $this->TransactionType;
    }

    /**
     * @param ProjectTransactionType $TransactionType
     * @return ProjectHeaderBase
     */
    public function setTransactionType($TransactionType)
    {
      $this->TransactionType = $TransactionType;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserDefined1()
    {
      return $this->UserDefined1;
    }

    /**
     * @param string $UserDefined1
     * @return ProjectHeaderBase
     */
    public function setUserDefined1($UserDefined1)
    {
      $this->UserDefined1 = $UserDefined1;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserDefined2()
    {
      return $this->UserDefined2;
    }

    /**
     * @param string $UserDefined2
     * @return ProjectHeaderBase
     */
    public function setUserDefined2($UserDefined2)
    {
      $this->UserDefined2 = $UserDefined2;
      return $this;
    }

    /**
     * @return UserKey
     */
    public function getUserKey()
    {
      return $this->UserKey;
    }

    /**
     * @param UserKey $UserKey
     * @return ProjectHeaderBase
     */
    public function setUserKey($UserKey)
    {
      $this->UserKey = $UserKey;
      return $this;
    }

}
