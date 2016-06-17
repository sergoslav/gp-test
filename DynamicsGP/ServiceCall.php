<?php

class ServiceCall extends ServiceCallDocument
{

    /**
     * @var ArrayOfServiceCallAdditionalChargeLine $AdditionalCharges
     */
    protected $AdditionalCharges = null;

    /**
     * @var \DateTime $ArrivalDateTime
     */
    protected $ArrivalDateTime = null;

    /**
     * @var \DateTime $CompletionDateTime
     */
    protected $CompletionDateTime = null;

    /**
     * @var \DateTime $DispatchDateTime
     */
    protected $DispatchDateTime = null;

    /**
     * @var ArrayOfServiceCallEquipmentCode $EquipmentCodes
     */
    protected $EquipmentCodes = null;

    /**
     * @var \DateTime $EscalationDateTime
     */
    protected $EscalationDateTime = null;

    /**
     * @var int $EscalationLevel
     */
    protected $EscalationLevel = null;

    /**
     * @var ArrayOfServiceCallExpenseLine $Expenses
     */
    protected $Expenses = null;

    /**
     * @var MoneyAmount $InvoicedAmount
     */
    protected $InvoicedAmount = null;

    /**
     * @var boolean $IsCallback
     */
    protected $IsCallback = null;

    /**
     * @var ArrayOfServiceCallLaborLine $Labor
     */
    protected $Labor = null;

    /**
     * @var ServiceCallEquipmentMeter $Meter1
     */
    protected $Meter1 = null;

    /**
     * @var ServiceCallEquipmentMeter $Meter2
     */
    protected $Meter2 = null;

    /**
     * @var ServiceCallEquipmentMeter $Meter3
     */
    protected $Meter3 = null;

    /**
     * @var ServiceCallEquipmentMeter $Meter4
     */
    protected $Meter4 = null;

    /**
     * @var ServiceCallEquipmentMeter $Meter5
     */
    protected $Meter5 = null;

    /**
     * @var \DateTime $NotifyDateTime
     */
    protected $NotifyDateTime = null;

    /**
     * @var ArrayOfServiceCallPartLine $Parts
     */
    protected $Parts = null;

    /**
     * @var ServiceCallType $Type
     */
    protected $Type = null;

    /**
     * @var boolean $WasNotified
     */
    protected $WasNotified = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfServiceCallAdditionalChargeLine
     */
    public function getAdditionalCharges()
    {
      return $this->AdditionalCharges;
    }

    /**
     * @param ArrayOfServiceCallAdditionalChargeLine $AdditionalCharges
     * @return ServiceCall
     */
    public function setAdditionalCharges($AdditionalCharges)
    {
      $this->AdditionalCharges = $AdditionalCharges;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getArrivalDateTime()
    {
      if ($this->ArrivalDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ArrivalDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ArrivalDateTime
     * @return ServiceCall
     */
    public function setArrivalDateTime(\DateTime $ArrivalDateTime = null)
    {
      if ($ArrivalDateTime == null) {
       $this->ArrivalDateTime = null;
      } else {
        $this->ArrivalDateTime = $ArrivalDateTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCompletionDateTime()
    {
      if ($this->CompletionDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CompletionDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CompletionDateTime
     * @return ServiceCall
     */
    public function setCompletionDateTime(\DateTime $CompletionDateTime = null)
    {
      if ($CompletionDateTime == null) {
       $this->CompletionDateTime = null;
      } else {
        $this->CompletionDateTime = $CompletionDateTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDispatchDateTime()
    {
      if ($this->DispatchDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DispatchDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DispatchDateTime
     * @return ServiceCall
     */
    public function setDispatchDateTime(\DateTime $DispatchDateTime = null)
    {
      if ($DispatchDateTime == null) {
       $this->DispatchDateTime = null;
      } else {
        $this->DispatchDateTime = $DispatchDateTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return ArrayOfServiceCallEquipmentCode
     */
    public function getEquipmentCodes()
    {
      return $this->EquipmentCodes;
    }

    /**
     * @param ArrayOfServiceCallEquipmentCode $EquipmentCodes
     * @return ServiceCall
     */
    public function setEquipmentCodes($EquipmentCodes)
    {
      $this->EquipmentCodes = $EquipmentCodes;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEscalationDateTime()
    {
      if ($this->EscalationDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EscalationDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EscalationDateTime
     * @return ServiceCall
     */
    public function setEscalationDateTime(\DateTime $EscalationDateTime = null)
    {
      if ($EscalationDateTime == null) {
       $this->EscalationDateTime = null;
      } else {
        $this->EscalationDateTime = $EscalationDateTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return int
     */
    public function getEscalationLevel()
    {
      return $this->EscalationLevel;
    }

    /**
     * @param int $EscalationLevel
     * @return ServiceCall
     */
    public function setEscalationLevel($EscalationLevel)
    {
      $this->EscalationLevel = $EscalationLevel;
      return $this;
    }

    /**
     * @return ArrayOfServiceCallExpenseLine
     */
    public function getExpenses()
    {
      return $this->Expenses;
    }

    /**
     * @param ArrayOfServiceCallExpenseLine $Expenses
     * @return ServiceCall
     */
    public function setExpenses($Expenses)
    {
      $this->Expenses = $Expenses;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getInvoicedAmount()
    {
      return $this->InvoicedAmount;
    }

    /**
     * @param MoneyAmount $InvoicedAmount
     * @return ServiceCall
     */
    public function setInvoicedAmount($InvoicedAmount)
    {
      $this->InvoicedAmount = $InvoicedAmount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsCallback()
    {
      return $this->IsCallback;
    }

    /**
     * @param boolean $IsCallback
     * @return ServiceCall
     */
    public function setIsCallback($IsCallback)
    {
      $this->IsCallback = $IsCallback;
      return $this;
    }

    /**
     * @return ArrayOfServiceCallLaborLine
     */
    public function getLabor()
    {
      return $this->Labor;
    }

    /**
     * @param ArrayOfServiceCallLaborLine $Labor
     * @return ServiceCall
     */
    public function setLabor($Labor)
    {
      $this->Labor = $Labor;
      return $this;
    }

    /**
     * @return ServiceCallEquipmentMeter
     */
    public function getMeter1()
    {
      return $this->Meter1;
    }

    /**
     * @param ServiceCallEquipmentMeter $Meter1
     * @return ServiceCall
     */
    public function setMeter1($Meter1)
    {
      $this->Meter1 = $Meter1;
      return $this;
    }

    /**
     * @return ServiceCallEquipmentMeter
     */
    public function getMeter2()
    {
      return $this->Meter2;
    }

    /**
     * @param ServiceCallEquipmentMeter $Meter2
     * @return ServiceCall
     */
    public function setMeter2($Meter2)
    {
      $this->Meter2 = $Meter2;
      return $this;
    }

    /**
     * @return ServiceCallEquipmentMeter
     */
    public function getMeter3()
    {
      return $this->Meter3;
    }

    /**
     * @param ServiceCallEquipmentMeter $Meter3
     * @return ServiceCall
     */
    public function setMeter3($Meter3)
    {
      $this->Meter3 = $Meter3;
      return $this;
    }

    /**
     * @return ServiceCallEquipmentMeter
     */
    public function getMeter4()
    {
      return $this->Meter4;
    }

    /**
     * @param ServiceCallEquipmentMeter $Meter4
     * @return ServiceCall
     */
    public function setMeter4($Meter4)
    {
      $this->Meter4 = $Meter4;
      return $this;
    }

    /**
     * @return ServiceCallEquipmentMeter
     */
    public function getMeter5()
    {
      return $this->Meter5;
    }

    /**
     * @param ServiceCallEquipmentMeter $Meter5
     * @return ServiceCall
     */
    public function setMeter5($Meter5)
    {
      $this->Meter5 = $Meter5;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getNotifyDateTime()
    {
      if ($this->NotifyDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->NotifyDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $NotifyDateTime
     * @return ServiceCall
     */
    public function setNotifyDateTime(\DateTime $NotifyDateTime = null)
    {
      if ($NotifyDateTime == null) {
       $this->NotifyDateTime = null;
      } else {
        $this->NotifyDateTime = $NotifyDateTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return ArrayOfServiceCallPartLine
     */
    public function getParts()
    {
      return $this->Parts;
    }

    /**
     * @param ArrayOfServiceCallPartLine $Parts
     * @return ServiceCall
     */
    public function setParts($Parts)
    {
      $this->Parts = $Parts;
      return $this;
    }

    /**
     * @return ServiceCallType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param ServiceCallType $Type
     * @return ServiceCall
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getWasNotified()
    {
      return $this->WasNotified;
    }

    /**
     * @param boolean $WasNotified
     * @return ServiceCall
     */
    public function setWasNotified($WasNotified)
    {
      $this->WasNotified = $WasNotified;
      return $this;
    }

}
