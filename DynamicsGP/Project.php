<?php

class Project extends BusinessObject
{

    /**
     * @var MoneyAmount $AccountAmount
     */
    protected $AccountAmount = null;

    /**
     * @var ProjectAccountingMethod $AccountingMethod
     */
    protected $AccountingMethod = null;

    /**
     * @var ArrayOfProjectAccountType $Accounts
     */
    protected $Accounts = null;

    /**
     * @var ProjectActual $Actual
     */
    protected $Actual = null;

    /**
     * @var ProjectBaseline $Baseline
     */
    protected $Baseline = null;

    /**
     * @var AddressKey $BillToAddressKey
     */
    protected $BillToAddressKey = null;

    /**
     * @var ProjectBilled $Billed
     */
    protected $Billed = null;

    /**
     * @var ArrayOfProjectBillingCycle $BillingCycles
     */
    protected $BillingCycles = null;

    /**
     * @var MoneyAmount $BillingNotReceivable
     */
    protected $BillingNotReceivable = null;

    /**
     * @var BillingType $BillingType
     */
    protected $BillingType = null;

    /**
     * @var ArrayOfProjectBudget $Budgets
     */
    protected $Budgets = null;

    /**
     * @var EmployeeKey $BusinessManagerKey
     */
    protected $BusinessManagerKey = null;

    /**
     * @var boolean $CloseToBillings
     */
    protected $CloseToBillings = null;

    /**
     * @var boolean $CloseToProjectCosts
     */
    protected $CloseToProjectCosts = null;

    /**
     * @var CommissionBasedOn $CommissionBasedOn
     */
    protected $CommissionBasedOn = null;

    /**
     * @var Percent $CommissionPercent
     */
    protected $CommissionPercent = null;

    /**
     * @var string $ContactPerson
     */
    protected $ContactPerson = null;

    /**
     * @var Percent $CostCompletedPercent
     */
    protected $CostCompletedPercent = null;

    /**
     * @var CurrencyKey $CurrencyKey
     */
    protected $CurrencyKey = null;

    /**
     * @var CustomerKey $CustomerKey
     */
    protected $CustomerKey = null;

    /**
     * @var string $CustomerPONumber
     */
    protected $CustomerPONumber = null;

    /**
     * @var string $DefaultBillingFormat
     */
    protected $DefaultBillingFormat = null;

    /**
     * @var ProjectDepartmentKey $DepartmentKey
     */
    protected $DepartmentKey = null;

    /**
     * @var Percent $DiscountPercent
     */
    protected $DiscountPercent = null;

    /**
     * @var boolean $DoesAcceptEquipmentRateTableReplacement
     */
    protected $DoesAcceptEquipmentRateTableReplacement = null;

    /**
     * @var boolean $DoesAcceptLaborRateTableReplacement
     */
    protected $DoesAcceptLaborRateTableReplacement = null;

    /**
     * @var boolean $DoesCombineForRevenueRecognition
     */
    protected $DoesCombineForRevenueRecognition = null;

    /**
     * @var ArrayOfProjectEquipmentItem $EquipmentList
     */
    protected $EquipmentList = null;

    /**
     * @var ProjectEquipmentRateTableKey $EquipmentRateTableKey
     */
    protected $EquipmentRateTableKey = null;

    /**
     * @var EmployeeKey $EstimatorKey
     */
    protected $EstimatorKey = null;

    /**
     * @var ArrayOfProjectFee $Fees
     */
    protected $Fees = null;

    /**
     * @var ProjectForecast $Forecast
     */
    protected $Forecast = null;

    /**
     * @var ProjectKey $Key
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
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var MoneyAmount $POCommittedCosts
     */
    protected $POCommittedCosts = null;

    /**
     * @var Quantity $POCommittedQuantity
     */
    protected $POCommittedQuantity = null;

    /**
     * @var ProjectPosted $Posted
     */
    protected $Posted = null;

    /**
     * @var MoneyAmount $ProjectAmount
     */
    protected $ProjectAmount = null;

    /**
     * @var ProjectClassKey $ProjectClassKey
     */
    protected $ProjectClassKey = null;

    /**
     * @var string $ProjectContractId
     */
    protected $ProjectContractId = null;

    /**
     * @var ProjectContractKey $ProjectContractKey
     */
    protected $ProjectContractKey = null;

    /**
     * @var MoneyAmount $ProjectFeeAmount
     */
    protected $ProjectFeeAmount = null;

    /**
     * @var string $ProjectId
     */
    protected $ProjectId = null;

    /**
     * @var EmployeeKey $ProjectManagerKey
     */
    protected $ProjectManagerKey = null;

    /**
     * @var Percent $QuantityCompletedPercent
     */
    protected $QuantityCompletedPercent = null;

    /**
     * @var boolean $RestrictToCustomerList
     */
    protected $RestrictToCustomerList = null;

    /**
     * @var MoneyAmount $RetainerAmount
     */
    protected $RetainerAmount = null;

    /**
     * @var MoneyAmount $RetentionFeeAmount
     */
    protected $RetentionFeeAmount = null;

    /**
     * @var Percent $RetentionPercent
     */
    protected $RetentionPercent = null;

    /**
     * @var string $SUTAState
     */
    protected $SUTAState = null;

    /**
     * @var SalesTerritoryKey $SalesTerritoryKey
     */
    protected $SalesTerritoryKey = null;

    /**
     * @var SalespersonKey $SalespersonKey
     */
    protected $SalespersonKey = null;

    /**
     * @var MoneyAmount $ServiceFeeAmount
     */
    protected $ServiceFeeAmount = null;

    /**
     * @var ProjectStatus $Status
     */
    protected $Status = null;

    /**
     * @var CurrencyKey $TransactionalCurrencyCodeKey
     */
    protected $TransactionalCurrencyCodeKey = null;

    /**
     * @var ProjectType $Type
     */
    protected $Type = null;

    /**
     * @var ProjectUnposted $Unposted
     */
    protected $Unposted = null;

    /**
     * @var string $UserDefinedText1
     */
    protected $UserDefinedText1 = null;

    /**
     * @var string $UserDefinedText2
     */
    protected $UserDefinedText2 = null;

    /**
     * @var WorkersCompensationKey $WorkersCompensationKey
     */
    protected $WorkersCompensationKey = null;

    /**
     * @var MoneyAmount $WriteUpDownAmount
     */
    protected $WriteUpDownAmount = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return MoneyAmount
     */
    public function getAccountAmount()
    {
      return $this->AccountAmount;
    }

    /**
     * @param MoneyAmount $AccountAmount
     * @return Project
     */
    public function setAccountAmount($AccountAmount)
    {
      $this->AccountAmount = $AccountAmount;
      return $this;
    }

    /**
     * @return ProjectAccountingMethod
     */
    public function getAccountingMethod()
    {
      return $this->AccountingMethod;
    }

    /**
     * @param ProjectAccountingMethod $AccountingMethod
     * @return Project
     */
    public function setAccountingMethod($AccountingMethod)
    {
      $this->AccountingMethod = $AccountingMethod;
      return $this;
    }

    /**
     * @return ArrayOfProjectAccountType
     */
    public function getAccounts()
    {
      return $this->Accounts;
    }

    /**
     * @param ArrayOfProjectAccountType $Accounts
     * @return Project
     */
    public function setAccounts($Accounts)
    {
      $this->Accounts = $Accounts;
      return $this;
    }

    /**
     * @return ProjectActual
     */
    public function getActual()
    {
      return $this->Actual;
    }

    /**
     * @param ProjectActual $Actual
     * @return Project
     */
    public function setActual($Actual)
    {
      $this->Actual = $Actual;
      return $this;
    }

    /**
     * @return ProjectBaseline
     */
    public function getBaseline()
    {
      return $this->Baseline;
    }

    /**
     * @param ProjectBaseline $Baseline
     * @return Project
     */
    public function setBaseline($Baseline)
    {
      $this->Baseline = $Baseline;
      return $this;
    }

    /**
     * @return AddressKey
     */
    public function getBillToAddressKey()
    {
      return $this->BillToAddressKey;
    }

    /**
     * @param AddressKey $BillToAddressKey
     * @return Project
     */
    public function setBillToAddressKey($BillToAddressKey)
    {
      $this->BillToAddressKey = $BillToAddressKey;
      return $this;
    }

    /**
     * @return ProjectBilled
     */
    public function getBilled()
    {
      return $this->Billed;
    }

    /**
     * @param ProjectBilled $Billed
     * @return Project
     */
    public function setBilled($Billed)
    {
      $this->Billed = $Billed;
      return $this;
    }

    /**
     * @return ArrayOfProjectBillingCycle
     */
    public function getBillingCycles()
    {
      return $this->BillingCycles;
    }

    /**
     * @param ArrayOfProjectBillingCycle $BillingCycles
     * @return Project
     */
    public function setBillingCycles($BillingCycles)
    {
      $this->BillingCycles = $BillingCycles;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getBillingNotReceivable()
    {
      return $this->BillingNotReceivable;
    }

    /**
     * @param MoneyAmount $BillingNotReceivable
     * @return Project
     */
    public function setBillingNotReceivable($BillingNotReceivable)
    {
      $this->BillingNotReceivable = $BillingNotReceivable;
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
     * @return Project
     */
    public function setBillingType($BillingType)
    {
      $this->BillingType = $BillingType;
      return $this;
    }

    /**
     * @return ArrayOfProjectBudget
     */
    public function getBudgets()
    {
      return $this->Budgets;
    }

    /**
     * @param ArrayOfProjectBudget $Budgets
     * @return Project
     */
    public function setBudgets($Budgets)
    {
      $this->Budgets = $Budgets;
      return $this;
    }

    /**
     * @return EmployeeKey
     */
    public function getBusinessManagerKey()
    {
      return $this->BusinessManagerKey;
    }

    /**
     * @param EmployeeKey $BusinessManagerKey
     * @return Project
     */
    public function setBusinessManagerKey($BusinessManagerKey)
    {
      $this->BusinessManagerKey = $BusinessManagerKey;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCloseToBillings()
    {
      return $this->CloseToBillings;
    }

    /**
     * @param boolean $CloseToBillings
     * @return Project
     */
    public function setCloseToBillings($CloseToBillings)
    {
      $this->CloseToBillings = $CloseToBillings;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCloseToProjectCosts()
    {
      return $this->CloseToProjectCosts;
    }

    /**
     * @param boolean $CloseToProjectCosts
     * @return Project
     */
    public function setCloseToProjectCosts($CloseToProjectCosts)
    {
      $this->CloseToProjectCosts = $CloseToProjectCosts;
      return $this;
    }

    /**
     * @return CommissionBasedOn
     */
    public function getCommissionBasedOn()
    {
      return $this->CommissionBasedOn;
    }

    /**
     * @param CommissionBasedOn $CommissionBasedOn
     * @return Project
     */
    public function setCommissionBasedOn($CommissionBasedOn)
    {
      $this->CommissionBasedOn = $CommissionBasedOn;
      return $this;
    }

    /**
     * @return Percent
     */
    public function getCommissionPercent()
    {
      return $this->CommissionPercent;
    }

    /**
     * @param Percent $CommissionPercent
     * @return Project
     */
    public function setCommissionPercent($CommissionPercent)
    {
      $this->CommissionPercent = $CommissionPercent;
      return $this;
    }

    /**
     * @return string
     */
    public function getContactPerson()
    {
      return $this->ContactPerson;
    }

    /**
     * @param string $ContactPerson
     * @return Project
     */
    public function setContactPerson($ContactPerson)
    {
      $this->ContactPerson = $ContactPerson;
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
     * @return Project
     */
    public function setCostCompletedPercent($CostCompletedPercent)
    {
      $this->CostCompletedPercent = $CostCompletedPercent;
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
     * @return Project
     */
    public function setCurrencyKey($CurrencyKey)
    {
      $this->CurrencyKey = $CurrencyKey;
      return $this;
    }

    /**
     * @return CustomerKey
     */
    public function getCustomerKey()
    {
      return $this->CustomerKey;
    }

    /**
     * @param CustomerKey $CustomerKey
     * @return Project
     */
    public function setCustomerKey($CustomerKey)
    {
      $this->CustomerKey = $CustomerKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerPONumber()
    {
      return $this->CustomerPONumber;
    }

    /**
     * @param string $CustomerPONumber
     * @return Project
     */
    public function setCustomerPONumber($CustomerPONumber)
    {
      $this->CustomerPONumber = $CustomerPONumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getDefaultBillingFormat()
    {
      return $this->DefaultBillingFormat;
    }

    /**
     * @param string $DefaultBillingFormat
     * @return Project
     */
    public function setDefaultBillingFormat($DefaultBillingFormat)
    {
      $this->DefaultBillingFormat = $DefaultBillingFormat;
      return $this;
    }

    /**
     * @return ProjectDepartmentKey
     */
    public function getDepartmentKey()
    {
      return $this->DepartmentKey;
    }

    /**
     * @param ProjectDepartmentKey $DepartmentKey
     * @return Project
     */
    public function setDepartmentKey($DepartmentKey)
    {
      $this->DepartmentKey = $DepartmentKey;
      return $this;
    }

    /**
     * @return Percent
     */
    public function getDiscountPercent()
    {
      return $this->DiscountPercent;
    }

    /**
     * @param Percent $DiscountPercent
     * @return Project
     */
    public function setDiscountPercent($DiscountPercent)
    {
      $this->DiscountPercent = $DiscountPercent;
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
     * @return Project
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
     * @return Project
     */
    public function setDoesAcceptLaborRateTableReplacement($DoesAcceptLaborRateTableReplacement)
    {
      $this->DoesAcceptLaborRateTableReplacement = $DoesAcceptLaborRateTableReplacement;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDoesCombineForRevenueRecognition()
    {
      return $this->DoesCombineForRevenueRecognition;
    }

    /**
     * @param boolean $DoesCombineForRevenueRecognition
     * @return Project
     */
    public function setDoesCombineForRevenueRecognition($DoesCombineForRevenueRecognition)
    {
      $this->DoesCombineForRevenueRecognition = $DoesCombineForRevenueRecognition;
      return $this;
    }

    /**
     * @return ArrayOfProjectEquipmentItem
     */
    public function getEquipmentList()
    {
      return $this->EquipmentList;
    }

    /**
     * @param ArrayOfProjectEquipmentItem $EquipmentList
     * @return Project
     */
    public function setEquipmentList($EquipmentList)
    {
      $this->EquipmentList = $EquipmentList;
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
     * @return Project
     */
    public function setEquipmentRateTableKey($EquipmentRateTableKey)
    {
      $this->EquipmentRateTableKey = $EquipmentRateTableKey;
      return $this;
    }

    /**
     * @return EmployeeKey
     */
    public function getEstimatorKey()
    {
      return $this->EstimatorKey;
    }

    /**
     * @param EmployeeKey $EstimatorKey
     * @return Project
     */
    public function setEstimatorKey($EstimatorKey)
    {
      $this->EstimatorKey = $EstimatorKey;
      return $this;
    }

    /**
     * @return ArrayOfProjectFee
     */
    public function getFees()
    {
      return $this->Fees;
    }

    /**
     * @param ArrayOfProjectFee $Fees
     * @return Project
     */
    public function setFees($Fees)
    {
      $this->Fees = $Fees;
      return $this;
    }

    /**
     * @return ProjectForecast
     */
    public function getForecast()
    {
      return $this->Forecast;
    }

    /**
     * @param ProjectForecast $Forecast
     * @return Project
     */
    public function setForecast($Forecast)
    {
      $this->Forecast = $Forecast;
      return $this;
    }

    /**
     * @return ProjectKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param ProjectKey $Key
     * @return Project
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
     * @return Project
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
     * @return Project
     */
    public function setLaborRateTableType($LaborRateTableType)
    {
      $this->LaborRateTableType = $LaborRateTableType;
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
     * @return Project
     */
    public function setName($Name)
    {
      $this->Name = $Name;
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
     * @return Project
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
     * @return Project
     */
    public function setPOCommittedQuantity($POCommittedQuantity)
    {
      $this->POCommittedQuantity = $POCommittedQuantity;
      return $this;
    }

    /**
     * @return ProjectPosted
     */
    public function getPosted()
    {
      return $this->Posted;
    }

    /**
     * @param ProjectPosted $Posted
     * @return Project
     */
    public function setPosted($Posted)
    {
      $this->Posted = $Posted;
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
     * @return Project
     */
    public function setProjectAmount($ProjectAmount)
    {
      $this->ProjectAmount = $ProjectAmount;
      return $this;
    }

    /**
     * @return ProjectClassKey
     */
    public function getProjectClassKey()
    {
      return $this->ProjectClassKey;
    }

    /**
     * @param ProjectClassKey $ProjectClassKey
     * @return Project
     */
    public function setProjectClassKey($ProjectClassKey)
    {
      $this->ProjectClassKey = $ProjectClassKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getProjectContractId()
    {
      return $this->ProjectContractId;
    }

    /**
     * @param string $ProjectContractId
     * @return Project
     */
    public function setProjectContractId($ProjectContractId)
    {
      $this->ProjectContractId = $ProjectContractId;
      return $this;
    }

    /**
     * @return ProjectContractKey
     */
    public function getProjectContractKey()
    {
      return $this->ProjectContractKey;
    }

    /**
     * @param ProjectContractKey $ProjectContractKey
     * @return Project
     */
    public function setProjectContractKey($ProjectContractKey)
    {
      $this->ProjectContractKey = $ProjectContractKey;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getProjectFeeAmount()
    {
      return $this->ProjectFeeAmount;
    }

    /**
     * @param MoneyAmount $ProjectFeeAmount
     * @return Project
     */
    public function setProjectFeeAmount($ProjectFeeAmount)
    {
      $this->ProjectFeeAmount = $ProjectFeeAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getProjectId()
    {
      return $this->ProjectId;
    }

    /**
     * @param string $ProjectId
     * @return Project
     */
    public function setProjectId($ProjectId)
    {
      $this->ProjectId = $ProjectId;
      return $this;
    }

    /**
     * @return EmployeeKey
     */
    public function getProjectManagerKey()
    {
      return $this->ProjectManagerKey;
    }

    /**
     * @param EmployeeKey $ProjectManagerKey
     * @return Project
     */
    public function setProjectManagerKey($ProjectManagerKey)
    {
      $this->ProjectManagerKey = $ProjectManagerKey;
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
     * @return Project
     */
    public function setQuantityCompletedPercent($QuantityCompletedPercent)
    {
      $this->QuantityCompletedPercent = $QuantityCompletedPercent;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRestrictToCustomerList()
    {
      return $this->RestrictToCustomerList;
    }

    /**
     * @param boolean $RestrictToCustomerList
     * @return Project
     */
    public function setRestrictToCustomerList($RestrictToCustomerList)
    {
      $this->RestrictToCustomerList = $RestrictToCustomerList;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getRetainerAmount()
    {
      return $this->RetainerAmount;
    }

    /**
     * @param MoneyAmount $RetainerAmount
     * @return Project
     */
    public function setRetainerAmount($RetainerAmount)
    {
      $this->RetainerAmount = $RetainerAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getRetentionFeeAmount()
    {
      return $this->RetentionFeeAmount;
    }

    /**
     * @param MoneyAmount $RetentionFeeAmount
     * @return Project
     */
    public function setRetentionFeeAmount($RetentionFeeAmount)
    {
      $this->RetentionFeeAmount = $RetentionFeeAmount;
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
     * @return Project
     */
    public function setRetentionPercent($RetentionPercent)
    {
      $this->RetentionPercent = $RetentionPercent;
      return $this;
    }

    /**
     * @return string
     */
    public function getSUTAState()
    {
      return $this->SUTAState;
    }

    /**
     * @param string $SUTAState
     * @return Project
     */
    public function setSUTAState($SUTAState)
    {
      $this->SUTAState = $SUTAState;
      return $this;
    }

    /**
     * @return SalesTerritoryKey
     */
    public function getSalesTerritoryKey()
    {
      return $this->SalesTerritoryKey;
    }

    /**
     * @param SalesTerritoryKey $SalesTerritoryKey
     * @return Project
     */
    public function setSalesTerritoryKey($SalesTerritoryKey)
    {
      $this->SalesTerritoryKey = $SalesTerritoryKey;
      return $this;
    }

    /**
     * @return SalespersonKey
     */
    public function getSalespersonKey()
    {
      return $this->SalespersonKey;
    }

    /**
     * @param SalespersonKey $SalespersonKey
     * @return Project
     */
    public function setSalespersonKey($SalespersonKey)
    {
      $this->SalespersonKey = $SalespersonKey;
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
     * @return Project
     */
    public function setServiceFeeAmount($ServiceFeeAmount)
    {
      $this->ServiceFeeAmount = $ServiceFeeAmount;
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
     * @return Project
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return CurrencyKey
     */
    public function getTransactionalCurrencyCodeKey()
    {
      return $this->TransactionalCurrencyCodeKey;
    }

    /**
     * @param CurrencyKey $TransactionalCurrencyCodeKey
     * @return Project
     */
    public function setTransactionalCurrencyCodeKey($TransactionalCurrencyCodeKey)
    {
      $this->TransactionalCurrencyCodeKey = $TransactionalCurrencyCodeKey;
      return $this;
    }

    /**
     * @return ProjectType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param ProjectType $Type
     * @return Project
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return ProjectUnposted
     */
    public function getUnposted()
    {
      return $this->Unposted;
    }

    /**
     * @param ProjectUnposted $Unposted
     * @return Project
     */
    public function setUnposted($Unposted)
    {
      $this->Unposted = $Unposted;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserDefinedText1()
    {
      return $this->UserDefinedText1;
    }

    /**
     * @param string $UserDefinedText1
     * @return Project
     */
    public function setUserDefinedText1($UserDefinedText1)
    {
      $this->UserDefinedText1 = $UserDefinedText1;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserDefinedText2()
    {
      return $this->UserDefinedText2;
    }

    /**
     * @param string $UserDefinedText2
     * @return Project
     */
    public function setUserDefinedText2($UserDefinedText2)
    {
      $this->UserDefinedText2 = $UserDefinedText2;
      return $this;
    }

    /**
     * @return WorkersCompensationKey
     */
    public function getWorkersCompensationKey()
    {
      return $this->WorkersCompensationKey;
    }

    /**
     * @param WorkersCompensationKey $WorkersCompensationKey
     * @return Project
     */
    public function setWorkersCompensationKey($WorkersCompensationKey)
    {
      $this->WorkersCompensationKey = $WorkersCompensationKey;
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
     * @return Project
     */
    public function setWriteUpDownAmount($WriteUpDownAmount)
    {
      $this->WriteUpDownAmount = $WriteUpDownAmount;
      return $this;
    }

}
