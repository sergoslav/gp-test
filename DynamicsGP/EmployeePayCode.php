<?php

class EmployeePayCode extends BusinessObject
{

    /**
     * @var EmployeeApplicableTaxes $ApplicableTaxes
     */
    protected $ApplicableTaxes = null;

    /**
     * @var PayCodeKey $BasePayRecord
     */
    protected $BasePayRecord = null;

    /**
     * @var float $BasedOnRate
     */
    protected $BasedOnRate = null;

    /**
     * @var EmployeePayCodeKey $EmployeePayCodeKey
     */
    protected $EmployeePayCodeKey = null;

    /**
     * @var EmployeeFlatTaxRates $FlatTaxRates
     */
    protected $FlatTaxRates = null;

    /**
     * @var boolean $IsDataEntry
     */
    protected $IsDataEntry = null;

    /**
     * @var boolean $IsInactive
     */
    protected $IsInactive = null;

    /**
     * @var boolean $IsPrimaryPayRecord
     */
    protected $IsPrimaryPayRecord = null;

    /**
     * @var boolean $IsReportAsWages
     */
    protected $IsReportAsWages = null;

    /**
     * @var boolean $IsSickTimeAccrued
     */
    protected $IsSickTimeAccrued = null;

    /**
     * @var boolean $IsTaxable
     */
    protected $IsTaxable = null;

    /**
     * @var boolean $IsVacationAccrued
     */
    protected $IsVacationAccrued = null;

    /**
     * @var float $MaxPayPerPeriod
     */
    protected $MaxPayPerPeriod = null;

    /**
     * @var string $Notes
     */
    protected $Notes = null;

    /**
     * @var float $PayAdvance
     */
    protected $PayAdvance = null;

    /**
     * @var float $PayAdvanceTaken
     */
    protected $PayAdvanceTaken = null;

    /**
     * @var float $PayFactor
     */
    protected $PayFactor = null;

    /**
     * @var float $PayPerPeriod
     */
    protected $PayPerPeriod = null;

    /**
     * @var CompensationPeriod $PayPeriod
     */
    protected $PayPeriod = null;

    /**
     * @var float $PayRate
     */
    protected $PayRate = null;

    /**
     * @var EmployeePayStep $PayStep
     */
    protected $PayStep = null;

    /**
     * @var EmployeePayTypes $PayType
     */
    protected $PayType = null;

    /**
     * @var string $PayUnit
     */
    protected $PayUnit = null;

    /**
     * @var CompensationPeriod $PayUnitPeriod
     */
    protected $PayUnitPeriod = null;

    /**
     * @var string $ShiftCode
     */
    protected $ShiftCode = null;

    /**
     * @var EmployeeTipType $TipType
     */
    protected $TipType = null;

    /**
     * @var EmployeeW2Boxes $W2BoxesLabels
     */
    protected $W2BoxesLabels = null;

    /**
     * @var string $WorkersComp
     */
    protected $WorkersComp = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return EmployeeApplicableTaxes
     */
    public function getApplicableTaxes()
    {
      return $this->ApplicableTaxes;
    }

    /**
     * @param EmployeeApplicableTaxes $ApplicableTaxes
     * @return EmployeePayCode
     */
    public function setApplicableTaxes($ApplicableTaxes)
    {
      $this->ApplicableTaxes = $ApplicableTaxes;
      return $this;
    }

    /**
     * @return PayCodeKey
     */
    public function getBasePayRecord()
    {
      return $this->BasePayRecord;
    }

    /**
     * @param PayCodeKey $BasePayRecord
     * @return EmployeePayCode
     */
    public function setBasePayRecord($BasePayRecord)
    {
      $this->BasePayRecord = $BasePayRecord;
      return $this;
    }

    /**
     * @return float
     */
    public function getBasedOnRate()
    {
      return $this->BasedOnRate;
    }

    /**
     * @param float $BasedOnRate
     * @return EmployeePayCode
     */
    public function setBasedOnRate($BasedOnRate)
    {
      $this->BasedOnRate = $BasedOnRate;
      return $this;
    }

    /**
     * @return EmployeePayCodeKey
     */
    public function getEmployeePayCodeKey()
    {
      return $this->EmployeePayCodeKey;
    }

    /**
     * @param EmployeePayCodeKey $EmployeePayCodeKey
     * @return EmployeePayCode
     */
    public function setEmployeePayCodeKey($EmployeePayCodeKey)
    {
      $this->EmployeePayCodeKey = $EmployeePayCodeKey;
      return $this;
    }

    /**
     * @return EmployeeFlatTaxRates
     */
    public function getFlatTaxRates()
    {
      return $this->FlatTaxRates;
    }

    /**
     * @param EmployeeFlatTaxRates $FlatTaxRates
     * @return EmployeePayCode
     */
    public function setFlatTaxRates($FlatTaxRates)
    {
      $this->FlatTaxRates = $FlatTaxRates;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDataEntry()
    {
      return $this->IsDataEntry;
    }

    /**
     * @param boolean $IsDataEntry
     * @return EmployeePayCode
     */
    public function setIsDataEntry($IsDataEntry)
    {
      $this->IsDataEntry = $IsDataEntry;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsInactive()
    {
      return $this->IsInactive;
    }

    /**
     * @param boolean $IsInactive
     * @return EmployeePayCode
     */
    public function setIsInactive($IsInactive)
    {
      $this->IsInactive = $IsInactive;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPrimaryPayRecord()
    {
      return $this->IsPrimaryPayRecord;
    }

    /**
     * @param boolean $IsPrimaryPayRecord
     * @return EmployeePayCode
     */
    public function setIsPrimaryPayRecord($IsPrimaryPayRecord)
    {
      $this->IsPrimaryPayRecord = $IsPrimaryPayRecord;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsReportAsWages()
    {
      return $this->IsReportAsWages;
    }

    /**
     * @param boolean $IsReportAsWages
     * @return EmployeePayCode
     */
    public function setIsReportAsWages($IsReportAsWages)
    {
      $this->IsReportAsWages = $IsReportAsWages;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSickTimeAccrued()
    {
      return $this->IsSickTimeAccrued;
    }

    /**
     * @param boolean $IsSickTimeAccrued
     * @return EmployeePayCode
     */
    public function setIsSickTimeAccrued($IsSickTimeAccrued)
    {
      $this->IsSickTimeAccrued = $IsSickTimeAccrued;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsTaxable()
    {
      return $this->IsTaxable;
    }

    /**
     * @param boolean $IsTaxable
     * @return EmployeePayCode
     */
    public function setIsTaxable($IsTaxable)
    {
      $this->IsTaxable = $IsTaxable;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsVacationAccrued()
    {
      return $this->IsVacationAccrued;
    }

    /**
     * @param boolean $IsVacationAccrued
     * @return EmployeePayCode
     */
    public function setIsVacationAccrued($IsVacationAccrued)
    {
      $this->IsVacationAccrued = $IsVacationAccrued;
      return $this;
    }

    /**
     * @return float
     */
    public function getMaxPayPerPeriod()
    {
      return $this->MaxPayPerPeriod;
    }

    /**
     * @param float $MaxPayPerPeriod
     * @return EmployeePayCode
     */
    public function setMaxPayPerPeriod($MaxPayPerPeriod)
    {
      $this->MaxPayPerPeriod = $MaxPayPerPeriod;
      return $this;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
      return $this->Notes;
    }

    /**
     * @param string $Notes
     * @return EmployeePayCode
     */
    public function setNotes($Notes)
    {
      $this->Notes = $Notes;
      return $this;
    }

    /**
     * @return float
     */
    public function getPayAdvance()
    {
      return $this->PayAdvance;
    }

    /**
     * @param float $PayAdvance
     * @return EmployeePayCode
     */
    public function setPayAdvance($PayAdvance)
    {
      $this->PayAdvance = $PayAdvance;
      return $this;
    }

    /**
     * @return float
     */
    public function getPayAdvanceTaken()
    {
      return $this->PayAdvanceTaken;
    }

    /**
     * @param float $PayAdvanceTaken
     * @return EmployeePayCode
     */
    public function setPayAdvanceTaken($PayAdvanceTaken)
    {
      $this->PayAdvanceTaken = $PayAdvanceTaken;
      return $this;
    }

    /**
     * @return float
     */
    public function getPayFactor()
    {
      return $this->PayFactor;
    }

    /**
     * @param float $PayFactor
     * @return EmployeePayCode
     */
    public function setPayFactor($PayFactor)
    {
      $this->PayFactor = $PayFactor;
      return $this;
    }

    /**
     * @return float
     */
    public function getPayPerPeriod()
    {
      return $this->PayPerPeriod;
    }

    /**
     * @param float $PayPerPeriod
     * @return EmployeePayCode
     */
    public function setPayPerPeriod($PayPerPeriod)
    {
      $this->PayPerPeriod = $PayPerPeriod;
      return $this;
    }

    /**
     * @return CompensationPeriod
     */
    public function getPayPeriod()
    {
      return $this->PayPeriod;
    }

    /**
     * @param CompensationPeriod $PayPeriod
     * @return EmployeePayCode
     */
    public function setPayPeriod($PayPeriod)
    {
      $this->PayPeriod = $PayPeriod;
      return $this;
    }

    /**
     * @return float
     */
    public function getPayRate()
    {
      return $this->PayRate;
    }

    /**
     * @param float $PayRate
     * @return EmployeePayCode
     */
    public function setPayRate($PayRate)
    {
      $this->PayRate = $PayRate;
      return $this;
    }

    /**
     * @return EmployeePayStep
     */
    public function getPayStep()
    {
      return $this->PayStep;
    }

    /**
     * @param EmployeePayStep $PayStep
     * @return EmployeePayCode
     */
    public function setPayStep($PayStep)
    {
      $this->PayStep = $PayStep;
      return $this;
    }

    /**
     * @return EmployeePayTypes
     */
    public function getPayType()
    {
      return $this->PayType;
    }

    /**
     * @param EmployeePayTypes $PayType
     * @return EmployeePayCode
     */
    public function setPayType($PayType)
    {
      $this->PayType = $PayType;
      return $this;
    }

    /**
     * @return string
     */
    public function getPayUnit()
    {
      return $this->PayUnit;
    }

    /**
     * @param string $PayUnit
     * @return EmployeePayCode
     */
    public function setPayUnit($PayUnit)
    {
      $this->PayUnit = $PayUnit;
      return $this;
    }

    /**
     * @return CompensationPeriod
     */
    public function getPayUnitPeriod()
    {
      return $this->PayUnitPeriod;
    }

    /**
     * @param CompensationPeriod $PayUnitPeriod
     * @return EmployeePayCode
     */
    public function setPayUnitPeriod($PayUnitPeriod)
    {
      $this->PayUnitPeriod = $PayUnitPeriod;
      return $this;
    }

    /**
     * @return string
     */
    public function getShiftCode()
    {
      return $this->ShiftCode;
    }

    /**
     * @param string $ShiftCode
     * @return EmployeePayCode
     */
    public function setShiftCode($ShiftCode)
    {
      $this->ShiftCode = $ShiftCode;
      return $this;
    }

    /**
     * @return EmployeeTipType
     */
    public function getTipType()
    {
      return $this->TipType;
    }

    /**
     * @param EmployeeTipType $TipType
     * @return EmployeePayCode
     */
    public function setTipType($TipType)
    {
      $this->TipType = $TipType;
      return $this;
    }

    /**
     * @return EmployeeW2Boxes
     */
    public function getW2BoxesLabels()
    {
      return $this->W2BoxesLabels;
    }

    /**
     * @param EmployeeW2Boxes $W2BoxesLabels
     * @return EmployeePayCode
     */
    public function setW2BoxesLabels($W2BoxesLabels)
    {
      $this->W2BoxesLabels = $W2BoxesLabels;
      return $this;
    }

    /**
     * @return string
     */
    public function getWorkersComp()
    {
      return $this->WorkersComp;
    }

    /**
     * @param string $WorkersComp
     * @return EmployeePayCode
     */
    public function setWorkersComp($WorkersComp)
    {
      $this->WorkersComp = $WorkersComp;
      return $this;
    }

}
