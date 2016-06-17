<?php

class ProjectMiscellaneousLogSummary
{

    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

    /**
     * @var ProjectMiscellaneousLogKey $Key
     */
    protected $Key = null;

    /**
     * @var MiscellaneousKey $MiscellaneousKey
     */
    protected $MiscellaneousKey = null;

    /**
     * @var string $ReferenceDocumentNumber
     */
    protected $ReferenceDocumentNumber = null;

    /**
     * @var \DateTime $ReportingDate
     */
    protected $ReportingDate = null;

    /**
     * @var int $ReportingPeriod
     */
    protected $ReportingPeriod = null;

    /**
     * @var MoneyAmount $TotalCost
     */
    protected $TotalCost = null;

    /**
     * @var ProjectTransactionState $TransactionState
     */
    protected $TransactionState = null;

    /**
     * @var ProjectTransactionType $TransactionType
     */
    protected $TransactionType = null;

    
    public function __construct()
    {
    
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
     * @return ProjectMiscellaneousLogSummary
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
     * @return ProjectMiscellaneousLogKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param ProjectMiscellaneousLogKey $Key
     * @return ProjectMiscellaneousLogSummary
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return MiscellaneousKey
     */
    public function getMiscellaneousKey()
    {
      return $this->MiscellaneousKey;
    }

    /**
     * @param MiscellaneousKey $MiscellaneousKey
     * @return ProjectMiscellaneousLogSummary
     */
    public function setMiscellaneousKey($MiscellaneousKey)
    {
      $this->MiscellaneousKey = $MiscellaneousKey;
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
     * @return ProjectMiscellaneousLogSummary
     */
    public function setReferenceDocumentNumber($ReferenceDocumentNumber)
    {
      $this->ReferenceDocumentNumber = $ReferenceDocumentNumber;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getReportingDate()
    {
      if ($this->ReportingDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ReportingDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ReportingDate
     * @return ProjectMiscellaneousLogSummary
     */
    public function setReportingDate(\DateTime $ReportingDate = null)
    {
      if ($ReportingDate == null) {
       $this->ReportingDate = null;
      } else {
        $this->ReportingDate = $ReportingDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return int
     */
    public function getReportingPeriod()
    {
      return $this->ReportingPeriod;
    }

    /**
     * @param int $ReportingPeriod
     * @return ProjectMiscellaneousLogSummary
     */
    public function setReportingPeriod($ReportingPeriod)
    {
      $this->ReportingPeriod = $ReportingPeriod;
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
     * @return ProjectMiscellaneousLogSummary
     */
    public function setTotalCost($TotalCost)
    {
      $this->TotalCost = $TotalCost;
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
     * @return ProjectMiscellaneousLogSummary
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
     * @return ProjectMiscellaneousLogSummary
     */
    public function setTransactionType($TransactionType)
    {
      $this->TransactionType = $TransactionType;
      return $this;
    }

}
