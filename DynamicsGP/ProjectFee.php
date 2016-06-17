<?php

class ProjectFee extends BusinessObject
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
     * @var Percent $CostPercent
     */
    protected $CostPercent = null;

    /**
     * @var \DateTime $EndDate
     */
    protected $EndDate = null;

    /**
     * @var ProjectFrequency $Frequency
     */
    protected $Frequency = null;

    /**
     * @var ProjectFeeItemKey $Key
     */
    protected $Key = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var boolean $Renew
     */
    protected $Renew = null;

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
     * @var Percent $RetentionPercent
     */
    protected $RetentionPercent = null;

    /**
     * @var Percent $RevenuePercent
     */
    protected $RevenuePercent = null;

    /**
     * @var SalesTaxBasis $SalesTaxBasis
     */
    protected $SalesTaxBasis = null;

    /**
     * @var TaxScheduleKey $SalesTaxScheduleKey
     */
    protected $SalesTaxScheduleKey = null;

    /**
     * @var ArrayOfProjectFeeSchedule $Schedules
     */
    protected $Schedules = null;

    /**
     * @var MoneyAmount $ServiceFeeAmount
     */
    protected $ServiceFeeAmount = null;

    /**
     * @var \DateTime $StartDate
     */
    protected $StartDate = null;

    /**
     * @var MoneyAmount $TotalAmount
     */
    protected $TotalAmount = null;

    /**
     * @var ProjectFeeType $Type
     */
    protected $Type = null;

    /**
     * @var string $UserDefined1
     */
    protected $UserDefined1 = null;

    /**
     * @var string $UserDefined2
     */
    protected $UserDefined2 = null;

    
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
     * @return ProjectFee
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
     * @return ProjectFee
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
     * @return ProjectFee
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
     * @return Percent
     */
    public function getCostPercent()
    {
      return $this->CostPercent;
    }

    /**
     * @param Percent $CostPercent
     * @return ProjectFee
     */
    public function setCostPercent($CostPercent)
    {
      $this->CostPercent = $CostPercent;
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
     * @return ProjectFee
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
     * @return ProjectFrequency
     */
    public function getFrequency()
    {
      return $this->Frequency;
    }

    /**
     * @param ProjectFrequency $Frequency
     * @return ProjectFee
     */
    public function setFrequency($Frequency)
    {
      $this->Frequency = $Frequency;
      return $this;
    }

    /**
     * @return ProjectFeeItemKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param ProjectFeeItemKey $Key
     * @return ProjectFee
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return ProjectFee
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRenew()
    {
      return $this->Renew;
    }

    /**
     * @param boolean $Renew
     * @return ProjectFee
     */
    public function setRenew($Renew)
    {
      $this->Renew = $Renew;
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
     * @return ProjectFee
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
     * @return ProjectFee
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
     * @return ProjectFee
     */
    public function setRenewMonth($RenewMonth)
    {
      $this->RenewMonth = $RenewMonth;
      return $this;
    }

    /**
     * @return Percent
     */
    public function getRetentionPercent()
    {
      return $this->RetentionPercent;
    }

    /**
     * @param Percent $RetentionPercent
     * @return ProjectFee
     */
    public function setRetentionPercent($RetentionPercent)
    {
      $this->RetentionPercent = $RetentionPercent;
      return $this;
    }

    /**
     * @return Percent
     */
    public function getRevenuePercent()
    {
      return $this->RevenuePercent;
    }

    /**
     * @param Percent $RevenuePercent
     * @return ProjectFee
     */
    public function setRevenuePercent($RevenuePercent)
    {
      $this->RevenuePercent = $RevenuePercent;
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
     * @return ProjectFee
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
     * @return ProjectFee
     */
    public function setSalesTaxScheduleKey($SalesTaxScheduleKey)
    {
      $this->SalesTaxScheduleKey = $SalesTaxScheduleKey;
      return $this;
    }

    /**
     * @return ArrayOfProjectFeeSchedule
     */
    public function getSchedules()
    {
      return $this->Schedules;
    }

    /**
     * @param ArrayOfProjectFeeSchedule $Schedules
     * @return ProjectFee
     */
    public function setSchedules($Schedules)
    {
      $this->Schedules = $Schedules;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getServiceFeeAmount()
    {
      return $this->ServiceFeeAmount;
    }

    /**
     * @param MoneyAmount $ServiceFeeAmount
     * @return ProjectFee
     */
    public function setServiceFeeAmount($ServiceFeeAmount)
    {
      $this->ServiceFeeAmount = $ServiceFeeAmount;
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
     * @return ProjectFee
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
     * @return ProjectFee
     */
    public function setTotalAmount($TotalAmount)
    {
      $this->TotalAmount = $TotalAmount;
      return $this;
    }

    /**
     * @return ProjectFeeType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param ProjectFeeType $Type
     * @return ProjectFee
     */
    public function setType($Type)
    {
      $this->Type = $Type;
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
     * @return ProjectFee
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
     * @return ProjectFee
     */
    public function setUserDefined2($UserDefined2)
    {
      $this->UserDefined2 = $UserDefined2;
      return $this;
    }

}
