<?php

class ProjectBudget extends BusinessObject
{

    /**
     * @var ProjectBudgetActual $Actual
     */
    protected $Actual = null;

    /**
     * @var ProjectBudgetBaseline $Baseline
     */
    protected $Baseline = null;

    /**
     * @var ProjectBudgetBilled $Billed
     */
    protected $Billed = null;

    /**
     * @var BillingType $BillingType
     */
    protected $BillingType = null;

    /**
     * @var Percent $CostCompletedPercent
     */
    protected $CostCompletedPercent = null;

    /**
     * @var MoneyAmount $CostOfEarningsAmount
     */
    protected $CostOfEarningsAmount = null;

    /**
     * @var boolean $DoesAcceptEquipmentRateTableReplacement
     */
    protected $DoesAcceptEquipmentRateTableReplacement = null;

    /**
     * @var boolean $DoesAcceptLaborRateTableReplacement
     */
    protected $DoesAcceptLaborRateTableReplacement = null;

    /**
     * @var MoneyAmount $EarningsAmount
     */
    protected $EarningsAmount = null;

    /**
     * @var ProjectEquipmentRateTableKey $EquipmentRateTableKey
     */
    protected $EquipmentRateTableKey = null;

    /**
     * @var ProjectBudgetForecast $Forecast
     */
    protected $Forecast = null;

    /**
     * @var boolean $IsInventoryItem
     */
    protected $IsInventoryItem = null;

    /**
     * @var ProjectBudgetKey $Key
     */
    protected $Key = null;

    /**
     * @var ProjectLaborRateTableKey $LaborRateTableKey
     */
    protected $LaborRateTableKey = null;

    /**
     * @var ProjectLaborRateTableType $LaborRateTableType
     */
    protected $LaborRateTableType = null;

    /**
     * @var int $LineSequenceNumber
     */
    protected $LineSequenceNumber = null;

    /**
     * @var ProjectOverheadRateMethod $OverheadRateMethod
     */
    protected $OverheadRateMethod = null;

    /**
     * @var MoneyAmount $POCommittedCosts
     */
    protected $POCommittedCosts = null;

    /**
     * @var Quantity $POCommittedQuantity
     */
    protected $POCommittedQuantity = null;

    /**
     * @var PayCodeKey $PayCodeHourlyKey
     */
    protected $PayCodeHourlyKey = null;

    /**
     * @var PayCodeKey $PayCodeSalaryKey
     */
    protected $PayCodeSalaryKey = null;

    /**
     * @var ProjectBudgetPosted $Posted
     */
    protected $Posted = null;

    /**
     * @var ProfitType $ProfitType
     */
    protected $ProfitType = null;

    /**
     * @var MoneyAmount $ProjectAmount
     */
    protected $ProjectAmount = null;

    /**
     * @var Percent $QuantityCompletedPercent
     */
    protected $QuantityCompletedPercent = null;

    /**
     * @var MoneyAmount $ReceiptsAmount
     */
    protected $ReceiptsAmount = null;

    /**
     * @var ProjectStatus $Status
     */
    protected $Status = null;

    /**
     * @var MoneyAmount $TaxPaidAmount
     */
    protected $TaxPaidAmount = null;

    /**
     * @var CurrencyKey $TransactionalCurrencyCode
     */
    protected $TransactionalCurrencyCode = null;

    /**
     * @var ProjectBudgetUncommitted $Uncommitted
     */
    protected $Uncommitted = null;

    /**
     * @var ProjectBudgetUnposted $Unposted
     */
    protected $Unposted = null;

    /**
     * @var string $UofM
     */
    protected $UofM = null;

    /**
     * @var UofMScheduleKey $UofMScheduleKey
     */
    protected $UofMScheduleKey = null;

    /**
     * @var MoneyAmount $WriteUpDownAmount
     */
    protected $WriteUpDownAmount = null;

    /**
     * @var MoneyAmount $WriteoffAmount
     */
    protected $WriteoffAmount = null;

    /**
     * @var MoneyAmount $WriteoffTaxAmount
     */
    protected $WriteoffTaxAmount = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ProjectBudgetActual
     */
    public function getActual()
    {
      return $this->Actual;
    }

    /**
     * @param ProjectBudgetActual $Actual
     * @return ProjectBudget
     */
    public function setActual($Actual)
    {
      $this->Actual = $Actual;
      return $this;
    }

    /**
     * @return ProjectBudgetBaseline
     */
    public function getBaseline()
    {
      return $this->Baseline;
    }

    /**
     * @param ProjectBudgetBaseline $Baseline
     * @return ProjectBudget
     */
    public function setBaseline($Baseline)
    {
      $this->Baseline = $Baseline;
      return $this;
    }

    /**
     * @return ProjectBudgetBilled
     */
    public function getBilled()
    {
      return $this->Billed;
    }

    /**
     * @param ProjectBudgetBilled $Billed
     * @return ProjectBudget
     */
    public function setBilled($Billed)
    {
      $this->Billed = $Billed;
      return $this;
    }

    /**
     * @return BillingType
     */
    public function getBillingType()
    {
      return $this->BillingType;
    }

    /**
     * @param BillingType $BillingType
     * @return ProjectBudget
     */
    public function setBillingType($BillingType)
    {
      $this->BillingType = $BillingType;
      return $this;
    }

    /**
     * @return Percent
     */
    public function getCostCompletedPercent()
    {
      return $this->CostCompletedPercent;
    }

    /**
     * @param Percent $CostCompletedPercent
     * @return ProjectBudget
     */
    public function setCostCompletedPercent($CostCompletedPercent)
    {
      $this->CostCompletedPercent = $CostCompletedPercent;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getCostOfEarningsAmount()
    {
      return $this->CostOfEarningsAmount;
    }

    /**
     * @param MoneyAmount $CostOfEarningsAmount
     * @return ProjectBudget
     */
    public function setCostOfEarningsAmount($CostOfEarningsAmount)
    {
      $this->CostOfEarningsAmount = $CostOfEarningsAmount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDoesAcceptEquipmentRateTableReplacement()
    {
      return $this->DoesAcceptEquipmentRateTableReplacement;
    }

    /**
     * @param boolean $DoesAcceptEquipmentRateTableReplacement
     * @return ProjectBudget
     */
    public function setDoesAcceptEquipmentRateTableReplacement($DoesAcceptEquipmentRateTableReplacement)
    {
      $this->DoesAcceptEquipmentRateTableReplacement = $DoesAcceptEquipmentRateTableReplacement;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDoesAcceptLaborRateTableReplacement()
    {
      return $this->DoesAcceptLaborRateTableReplacement;
    }

    /**
     * @param boolean $DoesAcceptLaborRateTableReplacement
     * @return ProjectBudget
     */
    public function setDoesAcceptLaborRateTableReplacement($DoesAcceptLaborRateTableReplacement)
    {
      $this->DoesAcceptLaborRateTableReplacement = $DoesAcceptLaborRateTableReplacement;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getEarningsAmount()
    {
      return $this->EarningsAmount;
    }

    /**
     * @param MoneyAmount $EarningsAmount
     * @return ProjectBudget
     */
    public function setEarningsAmount($EarningsAmount)
    {
      $this->EarningsAmount = $EarningsAmount;
      return $this;
    }

    /**
     * @return ProjectEquipmentRateTableKey
     */
    public function getEquipmentRateTableKey()
    {
      return $this->EquipmentRateTableKey;
    }

    /**
     * @param ProjectEquipmentRateTableKey $EquipmentRateTableKey
     * @return ProjectBudget
     */
    public function setEquipmentRateTableKey($EquipmentRateTableKey)
    {
      $this->EquipmentRateTableKey = $EquipmentRateTableKey;
      return $this;
    }

    /**
     * @return ProjectBudgetForecast
     */
    public function getForecast()
    {
      return $this->Forecast;
    }

    /**
     * @param ProjectBudgetForecast $Forecast
     * @return ProjectBudget
     */
    public function setForecast($Forecast)
    {
      $this->Forecast = $Forecast;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsInventoryItem()
    {
      return $this->IsInventoryItem;
    }

    /**
     * @param boolean $IsInventoryItem
     * @return ProjectBudget
     */
    public function setIsInventoryItem($IsInventoryItem)
    {
      $this->IsInventoryItem = $IsInventoryItem;
      return $this;
    }

    /**
     * @return ProjectBudgetKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param ProjectBudgetKey $Key
     * @return ProjectBudget
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return ProjectLaborRateTableKey
     */
    public function getLaborRateTableKey()
    {
      return $this->LaborRateTableKey;
    }

    /**
     * @param ProjectLaborRateTableKey $LaborRateTableKey
     * @return ProjectBudget
     */
    public function setLaborRateTableKey($LaborRateTableKey)
    {
      $this->LaborRateTableKey = $LaborRateTableKey;
      return $this;
    }

    /**
     * @return ProjectLaborRateTableType
     */
    public function getLaborRateTableType()
    {
      return $this->LaborRateTableType;
    }

    /**
     * @param ProjectLaborRateTableType $LaborRateTableType
     * @return ProjectBudget
     */
    public function setLaborRateTableType($LaborRateTableType)
    {
      $this->LaborRateTableType = $LaborRateTableType;
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
     * @return ProjectBudget
     */
    public function setLineSequenceNumber($LineSequenceNumber)
    {
      $this->LineSequenceNumber = $LineSequenceNumber;
      return $this;
    }

    /**
     * @return ProjectOverheadRateMethod
     */
    public function getOverheadRateMethod()
    {
      return $this->OverheadRateMethod;
    }

    /**
     * @param ProjectOverheadRateMethod $OverheadRateMethod
     * @return ProjectBudget
     */
    public function setOverheadRateMethod($OverheadRateMethod)
    {
      $this->OverheadRateMethod = $OverheadRateMethod;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getPOCommittedCosts()
    {
      return $this->POCommittedCosts;
    }

    /**
     * @param MoneyAmount $POCommittedCosts
     * @return ProjectBudget
     */
    public function setPOCommittedCosts($POCommittedCosts)
    {
      $this->POCommittedCosts = $POCommittedCosts;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getPOCommittedQuantity()
    {
      return $this->POCommittedQuantity;
    }

    /**
     * @param Quantity $POCommittedQuantity
     * @return ProjectBudget
     */
    public function setPOCommittedQuantity($POCommittedQuantity)
    {
      $this->POCommittedQuantity = $POCommittedQuantity;
      return $this;
    }

    /**
     * @return PayCodeKey
     */
    public function getPayCodeHourlyKey()
    {
      return $this->PayCodeHourlyKey;
    }

    /**
     * @param PayCodeKey $PayCodeHourlyKey
     * @return ProjectBudget
     */
    public function setPayCodeHourlyKey($PayCodeHourlyKey)
    {
      $this->PayCodeHourlyKey = $PayCodeHourlyKey;
      return $this;
    }

    /**
     * @return PayCodeKey
     */
    public function getPayCodeSalaryKey()
    {
      return $this->PayCodeSalaryKey;
    }

    /**
     * @param PayCodeKey $PayCodeSalaryKey
     * @return ProjectBudget
     */
    public function setPayCodeSalaryKey($PayCodeSalaryKey)
    {
      $this->PayCodeSalaryKey = $PayCodeSalaryKey;
      return $this;
    }

    /**
     * @return ProjectBudgetPosted
     */
    public function getPosted()
    {
      return $this->Posted;
    }

    /**
     * @param ProjectBudgetPosted $Posted
     * @return ProjectBudget
     */
    public function setPosted($Posted)
    {
      $this->Posted = $Posted;
      return $this;
    }

    /**
     * @return ProfitType
     */
    public function getProfitType()
    {
      return $this->ProfitType;
    }

    /**
     * @param ProfitType $ProfitType
     * @return ProjectBudget
     */
    public function setProfitType($ProfitType)
    {
      $this->ProfitType = $ProfitType;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getProjectAmount()
    {
      return $this->ProjectAmount;
    }

    /**
     * @param MoneyAmount $ProjectAmount
     * @return ProjectBudget
     */
    public function setProjectAmount($ProjectAmount)
    {
      $this->ProjectAmount = $ProjectAmount;
      return $this;
    }

    /**
     * @return Percent
     */
    public function getQuantityCompletedPercent()
    {
      return $this->QuantityCompletedPercent;
    }

    /**
     * @param Percent $QuantityCompletedPercent
     * @return ProjectBudget
     */
    public function setQuantityCompletedPercent($QuantityCompletedPercent)
    {
      $this->QuantityCompletedPercent = $QuantityCompletedPercent;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getReceiptsAmount()
    {
      return $this->ReceiptsAmount;
    }

    /**
     * @param MoneyAmount $ReceiptsAmount
     * @return ProjectBudget
     */
    public function setReceiptsAmount($ReceiptsAmount)
    {
      $this->ReceiptsAmount = $ReceiptsAmount;
      return $this;
    }

    /**
     * @return ProjectStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param ProjectStatus $Status
     * @return ProjectBudget
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getTaxPaidAmount()
    {
      return $this->TaxPaidAmount;
    }

    /**
     * @param MoneyAmount $TaxPaidAmount
     * @return ProjectBudget
     */
    public function setTaxPaidAmount($TaxPaidAmount)
    {
      $this->TaxPaidAmount = $TaxPaidAmount;
      return $this;
    }

    /**
     * @return CurrencyKey
     */
    public function getTransactionalCurrencyCode()
    {
      return $this->TransactionalCurrencyCode;
    }

    /**
     * @param CurrencyKey $TransactionalCurrencyCode
     * @return ProjectBudget
     */
    public function setTransactionalCurrencyCode($TransactionalCurrencyCode)
    {
      $this->TransactionalCurrencyCode = $TransactionalCurrencyCode;
      return $this;
    }

    /**
     * @return ProjectBudgetUncommitted
     */
    public function getUncommitted()
    {
      return $this->Uncommitted;
    }

    /**
     * @param ProjectBudgetUncommitted $Uncommitted
     * @return ProjectBudget
     */
    public function setUncommitted($Uncommitted)
    {
      $this->Uncommitted = $Uncommitted;
      return $this;
    }

    /**
     * @return ProjectBudgetUnposted
     */
    public function getUnposted()
    {
      return $this->Unposted;
    }

    /**
     * @param ProjectBudgetUnposted $Unposted
     * @return ProjectBudget
     */
    public function setUnposted($Unposted)
    {
      $this->Unposted = $Unposted;
      return $this;
    }

    /**
     * @return string
     */
    public function getUofM()
    {
      return $this->UofM;
    }

    /**
     * @param string $UofM
     * @return ProjectBudget
     */
    public function setUofM($UofM)
    {
      $this->UofM = $UofM;
      return $this;
    }

    /**
     * @return UofMScheduleKey
     */
    public function getUofMScheduleKey()
    {
      return $this->UofMScheduleKey;
    }

    /**
     * @param UofMScheduleKey $UofMScheduleKey
     * @return ProjectBudget
     */
    public function setUofMScheduleKey($UofMScheduleKey)
    {
      $this->UofMScheduleKey = $UofMScheduleKey;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getWriteUpDownAmount()
    {
      return $this->WriteUpDownAmount;
    }

    /**
     * @param MoneyAmount $WriteUpDownAmount
     * @return ProjectBudget
     */
    public function setWriteUpDownAmount($WriteUpDownAmount)
    {
      $this->WriteUpDownAmount = $WriteUpDownAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getWriteoffAmount()
    {
      return $this->WriteoffAmount;
    }

    /**
     * @param MoneyAmount $WriteoffAmount
     * @return ProjectBudget
     */
    public function setWriteoffAmount($WriteoffAmount)
    {
      $this->WriteoffAmount = $WriteoffAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getWriteoffTaxAmount()
    {
      return $this->WriteoffTaxAmount;
    }

    /**
     * @param MoneyAmount $WriteoffTaxAmount
     * @return ProjectBudget
     */
    public function setWriteoffTaxAmount($WriteoffTaxAmount)
    {
      $this->WriteoffTaxAmount = $WriteoffTaxAmount;
      return $this;
    }

}
