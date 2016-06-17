<?php

class ProjectChangeOrderFeeLine extends BusinessObject
{

    /**
     * @var MoneyAmount $Amount
     */
    protected $Amount = null;

    /**
     * @var \DateTime $ContractBeginDate
     */
    protected $ContractBeginDate = null;

    /**
     * @var \DateTime $ContractEndDate
     */
    protected $ContractEndDate = null;

    /**
     * @var boolean $DoesRenew
     */
    protected $DoesRenew = null;

    /**
     * @var \DateTime $EndDate
     */
    protected $EndDate = null;

    /**
     * @var ProjectFeeKey $FeeToUseKey
     */
    protected $FeeToUseKey = null;

    /**
     * @var ProjectFeeType $FeeType
     */
    protected $FeeType = null;

    /**
     * @var ProjectFrequency $Frequency
     */
    protected $Frequency = null;

    /**
     * @var ProjectChangeOrderFeeLineKey $Key
     */
    protected $Key = null;

    /**
     * @var int $LineSequenceNumber
     */
    protected $LineSequenceNumber = null;

    /**
     * @var Percent $Percent
     */
    protected $Percent = null;

    /**
     * @var MoneyAmount $PostedProjectFeeAmount
     */
    protected $PostedProjectFeeAmount = null;

    /**
     * @var MoneyAmount $PostedRetainerFeeAmount
     */
    protected $PostedRetainerFeeAmount = null;

    /**
     * @var MoneyAmount $PostedRetentionFeeAmount
     */
    protected $PostedRetentionFeeAmount = null;

    /**
     * @var MoneyAmount $PostedServiceFeeAmount
     */
    protected $PostedServiceFeeAmount = null;

    /**
     * @var \DateTime $PreviousContractBeginDate
     */
    protected $PreviousContractBeginDate = null;

    /**
     * @var \DateTime $PreviousContractEndDate
     */
    protected $PreviousContractEndDate = null;

    /**
     * @var MoneyAmount $PreviousFeeAmount
     */
    protected $PreviousFeeAmount = null;

    /**
     * @var Percent $PreviousFeePercent
     */
    protected $PreviousFeePercent = null;

    /**
     * @var ProjectFrequency $PreviousFrequency
     */
    protected $PreviousFrequency = null;

    /**
     * @var TaxScheduleKey $PreviousSalesTaxScheduleKey
     */
    protected $PreviousSalesTaxScheduleKey = null;

    /**
     * @var MoneyAmount $PreviousTotalAmount
     */
    protected $PreviousTotalAmount = null;

    /**
     * @var \DateTime $RenewDate
     */
    protected $RenewDate = null;

    /**
     * @var int $RenewDay
     */
    protected $RenewDay = null;

    /**
     * @var int $RenewMonth
     */
    protected $RenewMonth = null;

    /**
     * @var SalesTaxBasis $SalesTaxBasis
     */
    protected $SalesTaxBasis = null;

    /**
     * @var TaxScheduleKey $SalesTaxScheduleKey
     */
    protected $SalesTaxScheduleKey = null;

    /**
     * @var ArrayOfProjectChangeOrderFeeLineSchedule $Schedules
     */
    protected $Schedules = null;

    /**
     * @var int $SequenceNumber
     */
    protected $SequenceNumber = null;

    /**
     * @var \DateTime $StartDate
     */
    protected $StartDate = null;

    /**
     * @var MoneyAmount $TotalAmount
     */
    protected $TotalAmount = null;

    /**
     * @var MoneyAmount $VarianceFeeAmount
     */
    protected $VarianceFeeAmount = null;

    /**
     * @var Percent $VarianceFeePercent
     */
    protected $VarianceFeePercent = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return MoneyAmount
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param MoneyAmount $Amount
     * @return ProjectChangeOrderFeeLine
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getContractBeginDate()
    {
      if ($this->ContractBeginDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ContractBeginDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ContractBeginDate
     * @return ProjectChangeOrderFeeLine
     */
    public function setContractBeginDate(\DateTime $ContractBeginDate = null)
    {
      if ($ContractBeginDate == null) {
       $this->ContractBeginDate = null;
      } else {
        $this->ContractBeginDate = $ContractBeginDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getContractEndDate()
    {
      if ($this->ContractEndDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ContractEndDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ContractEndDate
     * @return ProjectChangeOrderFeeLine
     */
    public function setContractEndDate(\DateTime $ContractEndDate = null)
    {
      if ($ContractEndDate == null) {
       $this->ContractEndDate = null;
      } else {
        $this->ContractEndDate = $ContractEndDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDoesRenew()
    {
      return $this->DoesRenew;
    }

    /**
     * @param boolean $DoesRenew
     * @return ProjectChangeOrderFeeLine
     */
    public function setDoesRenew($DoesRenew)
    {
      $this->DoesRenew = $DoesRenew;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
      if ($this->EndDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EndDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EndDate
     * @return ProjectChangeOrderFeeLine
     */
    public function setEndDate(\DateTime $EndDate = null)
    {
      if ($EndDate == null) {
       $this->EndDate = null;
      } else {
        $this->EndDate = $EndDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return ProjectFeeKey
     */
    public function getFeeToUseKey()
    {
      return $this->FeeToUseKey;
    }

    /**
     * @param ProjectFeeKey $FeeToUseKey
     * @return ProjectChangeOrderFeeLine
     */
    public function setFeeToUseKey($FeeToUseKey)
    {
      $this->FeeToUseKey = $FeeToUseKey;
      return $this;
    }

    /**
     * @return ProjectFeeType
     */
    public function getFeeType()
    {
      return $this->FeeType;
    }

    /**
     * @param ProjectFeeType $FeeType
     * @return ProjectChangeOrderFeeLine
     */
    public function setFeeType($FeeType)
    {
      $this->FeeType = $FeeType;
      return $this;
    }

    /**
     * @return ProjectFrequency
     */
    public function getFrequency()
    {
      return $this->Frequency;
    }

    /**
     * @param ProjectFrequency $Frequency
     * @return ProjectChangeOrderFeeLine
     */
    public function setFrequency($Frequency)
    {
      $this->Frequency = $Frequency;
      return $this;
    }

    /**
     * @return ProjectChangeOrderFeeLineKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param ProjectChangeOrderFeeLineKey $Key
     * @return ProjectChangeOrderFeeLine
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return int
     */
    public function getLineSequenceNumber()
    {
      return $this->LineSequenceNumber;
    }

    /**
     * @param int $LineSequenceNumber
     * @return ProjectChangeOrderFeeLine
     */
    public function setLineSequenceNumber($LineSequenceNumber)
    {
      $this->LineSequenceNumber = $LineSequenceNumber;
      return $this;
    }

    /**
     * @return Percent
     */
    public function getPercent()
    {
      return $this->Percent;
    }

    /**
     * @param Percent $Percent
     * @return ProjectChangeOrderFeeLine
     */
    public function setPercent($Percent)
    {
      $this->Percent = $Percent;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getPostedProjectFeeAmount()
    {
      return $this->PostedProjectFeeAmount;
    }

    /**
     * @param MoneyAmount $PostedProjectFeeAmount
     * @return ProjectChangeOrderFeeLine
     */
    public function setPostedProjectFeeAmount($PostedProjectFeeAmount)
    {
      $this->PostedProjectFeeAmount = $PostedProjectFeeAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getPostedRetainerFeeAmount()
    {
      return $this->PostedRetainerFeeAmount;
    }

    /**
     * @param MoneyAmount $PostedRetainerFeeAmount
     * @return ProjectChangeOrderFeeLine
     */
    public function setPostedRetainerFeeAmount($PostedRetainerFeeAmount)
    {
      $this->PostedRetainerFeeAmount = $PostedRetainerFeeAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getPostedRetentionFeeAmount()
    {
      return $this->PostedRetentionFeeAmount;
    }

    /**
     * @param MoneyAmount $PostedRetentionFeeAmount
     * @return ProjectChangeOrderFeeLine
     */
    public function setPostedRetentionFeeAmount($PostedRetentionFeeAmount)
    {
      $this->PostedRetentionFeeAmount = $PostedRetentionFeeAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getPostedServiceFeeAmount()
    {
      return $this->PostedServiceFeeAmount;
    }

    /**
     * @param MoneyAmount $PostedServiceFeeAmount
     * @return ProjectChangeOrderFeeLine
     */
    public function setPostedServiceFeeAmount($PostedServiceFeeAmount)
    {
      $this->PostedServiceFeeAmount = $PostedServiceFeeAmount;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPreviousContractBeginDate()
    {
      if ($this->PreviousContractBeginDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->PreviousContractBeginDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $PreviousContractBeginDate
     * @return ProjectChangeOrderFeeLine
     */
    public function setPreviousContractBeginDate(\DateTime $PreviousContractBeginDate = null)
    {
      if ($PreviousContractBeginDate == null) {
       $this->PreviousContractBeginDate = null;
      } else {
        $this->PreviousContractBeginDate = $PreviousContractBeginDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPreviousContractEndDate()
    {
      if ($this->PreviousContractEndDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->PreviousContractEndDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $PreviousContractEndDate
     * @return ProjectChangeOrderFeeLine
     */
    public function setPreviousContractEndDate(\DateTime $PreviousContractEndDate = null)
    {
      if ($PreviousContractEndDate == null) {
       $this->PreviousContractEndDate = null;
      } else {
        $this->PreviousContractEndDate = $PreviousContractEndDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getPreviousFeeAmount()
    {
      return $this->PreviousFeeAmount;
    }

    /**
     * @param MoneyAmount $PreviousFeeAmount
     * @return ProjectChangeOrderFeeLine
     */
    public function setPreviousFeeAmount($PreviousFeeAmount)
    {
      $this->PreviousFeeAmount = $PreviousFeeAmount;
      return $this;
    }

    /**
     * @return Percent
     */
    public function getPreviousFeePercent()
    {
      return $this->PreviousFeePercent;
    }

    /**
     * @param Percent $PreviousFeePercent
     * @return ProjectChangeOrderFeeLine
     */
    public function setPreviousFeePercent($PreviousFeePercent)
    {
      $this->PreviousFeePercent = $PreviousFeePercent;
      return $this;
    }

    /**
     * @return ProjectFrequency
     */
    public function getPreviousFrequency()
    {
      return $this->PreviousFrequency;
    }

    /**
     * @param ProjectFrequency $PreviousFrequency
     * @return ProjectChangeOrderFeeLine
     */
    public function setPreviousFrequency($PreviousFrequency)
    {
      $this->PreviousFrequency = $PreviousFrequency;
      return $this;
    }

    /**
     * @return TaxScheduleKey
     */
    public function getPreviousSalesTaxScheduleKey()
    {
      return $this->PreviousSalesTaxScheduleKey;
    }

    /**
     * @param TaxScheduleKey $PreviousSalesTaxScheduleKey
     * @return ProjectChangeOrderFeeLine
     */
    public function setPreviousSalesTaxScheduleKey($PreviousSalesTaxScheduleKey)
    {
      $this->PreviousSalesTaxScheduleKey = $PreviousSalesTaxScheduleKey;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getPreviousTotalAmount()
    {
      return $this->PreviousTotalAmount;
    }

    /**
     * @param MoneyAmount $PreviousTotalAmount
     * @return ProjectChangeOrderFeeLine
     */
    public function setPreviousTotalAmount($PreviousTotalAmount)
    {
      $this->PreviousTotalAmount = $PreviousTotalAmount;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getRenewDate()
    {
      if ($this->RenewDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->RenewDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $RenewDate
     * @return ProjectChangeOrderFeeLine
     */
    public function setRenewDate(\DateTime $RenewDate = null)
    {
      if ($RenewDate == null) {
       $this->RenewDate = null;
      } else {
        $this->RenewDate = $RenewDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return int
     */
    public function getRenewDay()
    {
      return $this->RenewDay;
    }

    /**
     * @param int $RenewDay
     * @return ProjectChangeOrderFeeLine
     */
    public function setRenewDay($RenewDay)
    {
      $this->RenewDay = $RenewDay;
      return $this;
    }

    /**
     * @return int
     */
    public function getRenewMonth()
    {
      return $this->RenewMonth;
    }

    /**
     * @param int $RenewMonth
     * @return ProjectChangeOrderFeeLine
     */
    public function setRenewMonth($RenewMonth)
    {
      $this->RenewMonth = $RenewMonth;
      return $this;
    }

    /**
     * @return SalesTaxBasis
     */
    public function getSalesTaxBasis()
    {
      return $this->SalesTaxBasis;
    }

    /**
     * @param SalesTaxBasis $SalesTaxBasis
     * @return ProjectChangeOrderFeeLine
     */
    public function setSalesTaxBasis($SalesTaxBasis)
    {
      $this->SalesTaxBasis = $SalesTaxBasis;
      return $this;
    }

    /**
     * @return TaxScheduleKey
     */
    public function getSalesTaxScheduleKey()
    {
      return $this->SalesTaxScheduleKey;
    }

    /**
     * @param TaxScheduleKey $SalesTaxScheduleKey
     * @return ProjectChangeOrderFeeLine
     */
    public function setSalesTaxScheduleKey($SalesTaxScheduleKey)
    {
      $this->SalesTaxScheduleKey = $SalesTaxScheduleKey;
      return $this;
    }

    /**
     * @return ArrayOfProjectChangeOrderFeeLineSchedule
     */
    public function getSchedules()
    {
      return $this->Schedules;
    }

    /**
     * @param ArrayOfProjectChangeOrderFeeLineSchedule $Schedules
     * @return ProjectChangeOrderFeeLine
     */
    public function setSchedules($Schedules)
    {
      $this->Schedules = $Schedules;
      return $this;
    }

    /**
     * @return int
     */
    public function getSequenceNumber()
    {
      return $this->SequenceNumber;
    }

    /**
     * @param int $SequenceNumber
     * @return ProjectChangeOrderFeeLine
     */
    public function setSequenceNumber($SequenceNumber)
    {
      $this->SequenceNumber = $SequenceNumber;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
      if ($this->StartDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->StartDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $StartDate
     * @return ProjectChangeOrderFeeLine
     */
    public function setStartDate(\DateTime $StartDate = null)
    {
      if ($StartDate == null) {
       $this->StartDate = null;
      } else {
        $this->StartDate = $StartDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getTotalAmount()
    {
      return $this->TotalAmount;
    }

    /**
     * @param MoneyAmount $TotalAmount
     * @return ProjectChangeOrderFeeLine
     */
    public function setTotalAmount($TotalAmount)
    {
      $this->TotalAmount = $TotalAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getVarianceFeeAmount()
    {
      return $this->VarianceFeeAmount;
    }

    /**
     * @param MoneyAmount $VarianceFeeAmount
     * @return ProjectChangeOrderFeeLine
     */
    public function setVarianceFeeAmount($VarianceFeeAmount)
    {
      $this->VarianceFeeAmount = $VarianceFeeAmount;
      return $this;
    }

    /**
     * @return Percent
     */
    public function getVarianceFeePercent()
    {
      return $this->VarianceFeePercent;
    }

    /**
     * @param Percent $VarianceFeePercent
     * @return ProjectChangeOrderFeeLine
     */
    public function setVarianceFeePercent($VarianceFeePercent)
    {
      $this->VarianceFeePercent = $VarianceFeePercent;
      return $this;
    }

}
