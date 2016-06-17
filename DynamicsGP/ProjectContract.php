<?php

class ProjectContract extends BusinessObject
{

    /**
     * @var ProjectAccountingMethod $AccountingMethod
     */
    protected $AccountingMethod = null;

    /**
     * @var ArrayOfProjectContractAccountType $Accounts
     */
    protected $Accounts = null;

    /**
     * @var ProjectContractActual $Actual
     */
    protected $Actual = null;

    /**
     * @var AddressKey $AddressKey
     */
    protected $AddressKey = null;

    /**
     * @var ProjectContractBaseline $Baseline
     */
    protected $Baseline = null;

    /**
     * @var AddressKey $BillToAddressKey
     */
    protected $BillToAddressKey = null;

    /**
     * @var ProjectContractBilled $Billed
     */
    protected $Billed = null;

    /**
     * @var ArrayOfProjectContractBillingCycle $BillingCycles
     */
    protected $BillingCycles = null;

    /**
     * @var EmployeeKey $BusinessManagerKey
     */
    protected $BusinessManagerKey = null;

    /**
     * @var ProjectClassKey $ClassKey
     */
    protected $ClassKey = null;

    /**
     * @var ProjectCloseToBillings $CloseToBillings
     */
    protected $CloseToBillings = null;

    /**
     * @var ProjectCloseToProjectCosts $CloseToProjectCosts
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
     * @var EmployeeKey $ContractManagerKey
     */
    protected $ContractManagerKey = null;

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
     * @var Percent $DiscountPercent
     */
    protected $DiscountPercent = null;

    /**
     * @var boolean $DoesCombineForRevenueRecognition
     */
    protected $DoesCombineForRevenueRecognition = null;

    /**
     * @var ProjectContractForecast $Forecast
     */
    protected $Forecast = null;

    /**
     * @var ProjectContractKey $Key
     */
    protected $Key = null;

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
     * @var MoneyAmount $ProjectAmount
     */
    protected $ProjectAmount = null;

    /**
     * @var string $ProjectContractId
     */
    protected $ProjectContractId = null;

    /**
     * @var MoneyAmount $ProjectFeeAmount
     */
    protected $ProjectFeeAmount = null;

    /**
     * @var ProjectType $ProjectType
     */
    protected $ProjectType = null;

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
     * @var CurrencyKey $TransactionalCurrencyKey
     */
    protected $TransactionalCurrencyKey = null;

    /**
     * @var ProjectContractUnposted $Unposted
     */
    protected $Unposted = null;

    /**
     * @var string $UserDefined1
     */
    protected $UserDefined1 = null;

    /**
     * @var string $UserDefined2
     */
    protected $UserDefined2 = null;

    /**
     * @var MoneyAmount $WriteUpDownAmount
     */
    protected $WriteUpDownAmount = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return ProjectContract
     */
    public function setAccountingMethod($AccountingMethod)
    {
      $this->AccountingMethod = $AccountingMethod;
      return $this;
    }

    /**
     * @return ArrayOfProjectContractAccountType
     */
    public function getAccounts()
    {
      return $this->Accounts;
    }

    /**
     * @param ArrayOfProjectContractAccountType $Accounts
     * @return ProjectContract
     */
    public function setAccounts($Accounts)
    {
      $this->Accounts = $Accounts;
      return $this;
    }

    /**
     * @return ProjectContractActual
     */
    public function getActual()
    {
      return $this->Actual;
    }

    /**
     * @param ProjectContractActual $Actual
     * @return ProjectContract
     */
    public function setActual($Actual)
    {
      $this->Actual = $Actual;
      return $this;
    }

    /**
     * @return AddressKey
     */
    public function getAddressKey()
    {
      return $this->AddressKey;
    }

    /**
     * @param AddressKey $AddressKey
     * @return ProjectContract
     */
    public function setAddressKey($AddressKey)
    {
      $this->AddressKey = $AddressKey;
      return $this;
    }

    /**
     * @return ProjectContractBaseline
     */
    public function getBaseline()
    {
      return $this->Baseline;
    }

    /**
     * @param ProjectContractBaseline $Baseline
     * @return ProjectContract
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
     * @return ProjectContract
     */
    public function setBillToAddressKey($BillToAddressKey)
    {
      $this->BillToAddressKey = $BillToAddressKey;
      return $this;
    }

    /**
     * @return ProjectContractBilled
     */
    public function getBilled()
    {
      return $this->Billed;
    }

    /**
     * @param ProjectContractBilled $Billed
     * @return ProjectContract
     */
    public function setBilled($Billed)
    {
      $this->Billed = $Billed;
      return $this;
    }

    /**
     * @return ArrayOfProjectContractBillingCycle
     */
    public function getBillingCycles()
    {
      return $this->BillingCycles;
    }

    /**
     * @param ArrayOfProjectContractBillingCycle $BillingCycles
     * @return ProjectContract
     */
    public function setBillingCycles($BillingCycles)
    {
      $this->BillingCycles = $BillingCycles;
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
     * @return ProjectContract
     */
    public function setBusinessManagerKey($BusinessManagerKey)
    {
      $this->BusinessManagerKey = $BusinessManagerKey;
      return $this;
    }

    /**
     * @return ProjectClassKey
     */
    public function getClassKey()
    {
      return $this->ClassKey;
    }

    /**
     * @param ProjectClassKey $ClassKey
     * @return ProjectContract
     */
    public function setClassKey($ClassKey)
    {
      $this->ClassKey = $ClassKey;
      return $this;
    }

    /**
     * @return ProjectCloseToBillings
     */
    public function getCloseToBillings()
    {
      return $this->CloseToBillings;
    }

    /**
     * @param ProjectCloseToBillings $CloseToBillings
     * @return ProjectContract
     */
    public function setCloseToBillings($CloseToBillings)
    {
      $this->CloseToBillings = $CloseToBillings;
      return $this;
    }

    /**
     * @return ProjectCloseToProjectCosts
     */
    public function getCloseToProjectCosts()
    {
      return $this->CloseToProjectCosts;
    }

    /**
     * @param ProjectCloseToProjectCosts $CloseToProjectCosts
     * @return ProjectContract
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
     * @return ProjectContract
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
     * @return ProjectContract
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
     * @return ProjectContract
     */
    public function setContactPerson($ContactPerson)
    {
      $this->ContactPerson = $ContactPerson;
      return $this;
    }

    /**
     * @return EmployeeKey
     */
    public function getContractManagerKey()
    {
      return $this->ContractManagerKey;
    }

    /**
     * @param EmployeeKey $ContractManagerKey
     * @return ProjectContract
     */
    public function setContractManagerKey($ContractManagerKey)
    {
      $this->ContractManagerKey = $ContractManagerKey;
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
     * @return ProjectContract
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
     * @return ProjectContract
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
     * @return ProjectContract
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
     * @return ProjectContract
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
     * @return ProjectContract
     */
    public function setDefaultBillingFormat($DefaultBillingFormat)
    {
      $this->DefaultBillingFormat = $DefaultBillingFormat;
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
     * @return ProjectContract
     */
    public function setDiscountPercent($DiscountPercent)
    {
      $this->DiscountPercent = $DiscountPercent;
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
     * @return ProjectContract
     */
    public function setDoesCombineForRevenueRecognition($DoesCombineForRevenueRecognition)
    {
      $this->DoesCombineForRevenueRecognition = $DoesCombineForRevenueRecognition;
      return $this;
    }

    /**
     * @return ProjectContractForecast
     */
    public function getForecast()
    {
      return $this->Forecast;
    }

    /**
     * @param ProjectContractForecast $Forecast
     * @return ProjectContract
     */
    public function setForecast($Forecast)
    {
      $this->Forecast = $Forecast;
      return $this;
    }

    /**
     * @return ProjectContractKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param ProjectContractKey $Key
     * @return ProjectContract
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
     * @return ProjectContract
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
     * @return ProjectContract
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
     * @return ProjectContract
     */
    public function setPOCommittedQuantity($POCommittedQuantity)
    {
      $this->POCommittedQuantity = $POCommittedQuantity;
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
     * @return ProjectContract
     */
    public function setProjectAmount($ProjectAmount)
    {
      $this->ProjectAmount = $ProjectAmount;
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
     * @return ProjectContract
     */
    public function setProjectContractId($ProjectContractId)
    {
      $this->ProjectContractId = $ProjectContractId;
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
     * @return ProjectContract
     */
    public function setProjectFeeAmount($ProjectFeeAmount)
    {
      $this->ProjectFeeAmount = $ProjectFeeAmount;
      return $this;
    }

    /**
     * @return ProjectType
     */
    public function getProjectType()
    {
      return $this->ProjectType;
    }

    /**
     * @param ProjectType $ProjectType
     * @return ProjectContract
     */
    public function setProjectType($ProjectType)
    {
      $this->ProjectType = $ProjectType;
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
     * @return ProjectContract
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
     * @return ProjectContract
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
     * @return ProjectContract
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
     * @return ProjectContract
     */
    public function setRetentionFeeAmount($RetentionFeeAmount)
    {
      $this->RetentionFeeAmount = $RetentionFeeAmount;
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
     * @return ProjectContract
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
     * @return ProjectContract
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
     * @return ProjectContract
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
     * @return ProjectContract
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return CurrencyKey
     */
    public function getTransactionalCurrencyKey()
    {
      return $this->TransactionalCurrencyKey;
    }

    /**
     * @param CurrencyKey $TransactionalCurrencyKey
     * @return ProjectContract
     */
    public function setTransactionalCurrencyKey($TransactionalCurrencyKey)
    {
      $this->TransactionalCurrencyKey = $TransactionalCurrencyKey;
      return $this;
    }

    /**
     * @return ProjectContractUnposted
     */
    public function getUnposted()
    {
      return $this->Unposted;
    }

    /**
     * @param ProjectContractUnposted $Unposted
     * @return ProjectContract
     */
    public function setUnposted($Unposted)
    {
      $this->Unposted = $Unposted;
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
     * @return ProjectContract
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
     * @return ProjectContract
     */
    public function setUserDefined2($UserDefined2)
    {
      $this->UserDefined2 = $UserDefined2;
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
     * @return ProjectContract
     */
    public function setWriteUpDownAmount($WriteUpDownAmount)
    {
      $this->WriteUpDownAmount = $WriteUpDownAmount;
      return $this;
    }

}
