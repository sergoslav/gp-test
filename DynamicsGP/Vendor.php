<?php

class Vendor extends BusinessObject
{

    /**
     * @var GLAccountNumberKey $AccountsPayableGLAccountKey
     */
    protected $AccountsPayableGLAccountKey = null;

    /**
     * @var GLAccountNumberKey $AccruedPurchasesGLAccountKey
     */
    protected $AccruedPurchasesGLAccountKey = null;

    /**
     * @var ArrayOfVendorAddress $Addresses
     */
    protected $Addresses = null;

    /**
     * @var boolean $AllowRevaluation
     */
    protected $AllowRevaluation = null;

    /**
     * @var BankAccountKey $BankAccountKey
     */
    protected $BankAccountKey = null;

    /**
     * @var GLAccountNumberKey $CashGLAccountKey
     */
    protected $CashGLAccountKey = null;

    /**
     * @var string $CheckName
     */
    protected $CheckName = null;

    /**
     * @var VendorClassKey $ClassKey
     */
    protected $ClassKey = null;

    /**
     * @var string $Comment1
     */
    protected $Comment1 = null;

    /**
     * @var string $Comment2
     */
    protected $Comment2 = null;

    /**
     * @var \DateTime $CreatedDate
     */
    protected $CreatedDate = null;

    /**
     * @var VendorCreditLimit $CreditLimit
     */
    protected $CreditLimit = null;

    /**
     * @var CurrencyKey $CurrencyKey
     */
    protected $CurrencyKey = null;

    /**
     * @var VendorAddressKey $DefaultAddressKey
     */
    protected $DefaultAddressKey = null;

    /**
     * @var PayablesCashAccountType $DefaultCashAccountType
     */
    protected $DefaultCashAccountType = null;

    /**
     * @var int $DiscountGracePeriod
     */
    protected $DiscountGracePeriod = null;

    /**
     * @var int $DueDateGracePeriod
     */
    protected $DueDateGracePeriod = null;

    /**
     * @var GLAccountNumberKey $FinanceChargesGLAccountKey
     */
    protected $FinanceChargesGLAccountKey = null;

    /**
     * @var FreeOnBoard $FreeOnBoard
     */
    protected $FreeOnBoard = null;

    /**
     * @var GLAccountNumberKey $FreightGLAccountKey
     */
    protected $FreightGLAccountKey = null;

    /**
     * @var HistoryOptions $HistoryOptions
     */
    protected $HistoryOptions = null;

    /**
     * @var boolean $IsActive
     */
    protected $IsActive = null;

    /**
     * @var boolean $IsOnHold
     */
    protected $IsOnHold = null;

    /**
     * @var boolean $IsOneTime
     */
    protected $IsOneTime = null;

    /**
     * @var VendorKey $Key
     */
    protected $Key = null;

    /**
     * @var string $Language
     */
    protected $Language = null;

    /**
     * @var MaximumInvoice $MaximumInvoice
     */
    protected $MaximumInvoice = null;

    /**
     * @var MaximumWriteoff $MaximumWriteoff
     */
    protected $MaximumWriteoff = null;

    /**
     * @var MoneyAmount $MinimumOrderAmount
     */
    protected $MinimumOrderAmount = null;

    /**
     * @var MoneyPercentChoice $MinimumPayment
     */
    protected $MinimumPayment = null;

    /**
     * @var GLAccountNumberKey $MiscellaneousGLAccountKey
     */
    protected $MiscellaneousGLAccountKey = null;

    /**
     * @var \DateTime $ModifiedDate
     */
    protected $ModifiedDate = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Notes
     */
    protected $Notes = null;

    /**
     * @var string $PaymentPriority
     */
    protected $PaymentPriority = null;

    /**
     * @var PaymentTermsKey $PaymentTermsKey
     */
    protected $PaymentTermsKey = null;

    /**
     * @var PayablesPostResultsTo $PostResultsTo
     */
    protected $PostResultsTo = null;

    /**
     * @var ProjectAccountingOptions $ProjectAccountingOptions
     */
    protected $ProjectAccountingOptions = null;

    /**
     * @var VendorAddressKey $PurchaseAddressKey
     */
    protected $PurchaseAddressKey = null;

    /**
     * @var GLAccountNumberKey $PurchasePriceVarianceGLAccountKey
     */
    protected $PurchasePriceVarianceGLAccountKey = null;

    /**
     * @var GLAccountNumberKey $PurchasesGLAccountKey
     */
    protected $PurchasesGLAccountKey = null;

    /**
     * @var RateTypeKey $RateTypeKey
     */
    protected $RateTypeKey = null;

    /**
     * @var VendorAddressKey $RemitToAddressKey
     */
    protected $RemitToAddressKey = null;

    /**
     * @var VendorAddressKey $ShipFromAddressKey
     */
    protected $ShipFromAddressKey = null;

    /**
     * @var string $ShortName
     */
    protected $ShortName = null;

    /**
     * @var int $Tax1099BoxNumber
     */
    protected $Tax1099BoxNumber = null;

    /**
     * @var Tax1099Type $Tax1099Type
     */
    protected $Tax1099Type = null;

    /**
     * @var GLAccountNumberKey $TaxGLAccountKey
     */
    protected $TaxGLAccountKey = null;

    /**
     * @var string $TaxIdentificationNumber
     */
    protected $TaxIdentificationNumber = null;

    /**
     * @var string $TaxRegistrationNumber
     */
    protected $TaxRegistrationNumber = null;

    /**
     * @var string $TaxSchedule
     */
    protected $TaxSchedule = null;

    /**
     * @var GLAccountNumberKey $TermsDiscountAvailableGLAccountKey
     */
    protected $TermsDiscountAvailableGLAccountKey = null;

    /**
     * @var GLAccountNumberKey $TermsDiscountTakenGLAccountKey
     */
    protected $TermsDiscountTakenGLAccountKey = null;

    /**
     * @var GLAccountNumberKey $TradeDiscountGLAccountKey
     */
    protected $TradeDiscountGLAccountKey = null;

    /**
     * @var Percent $TradeDiscountPercent
     */
    protected $TradeDiscountPercent = null;

    /**
     * @var string $UserDefined1
     */
    protected $UserDefined1 = null;

    /**
     * @var string $UserDefined2
     */
    protected $UserDefined2 = null;

    /**
     * @var LanguageKey $UserLanguageKey
     */
    protected $UserLanguageKey = null;

    /**
     * @var string $VendorAccountNumber
     */
    protected $VendorAccountNumber = null;

    /**
     * @var WorkflowPriority $WorkflowPriority
     */
    protected $WorkflowPriority = null;

    /**
     * @var ArrayOfWorkflow $Workflows
     */
    protected $Workflows = null;

    /**
     * @var GLAccountNumberKey $WriteoffGLAccountKey
     */
    protected $WriteoffGLAccountKey = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getAccountsPayableGLAccountKey()
    {
      return $this->AccountsPayableGLAccountKey;
    }

    /**
     * @param GLAccountNumberKey $AccountsPayableGLAccountKey
     * @return Vendor
     */
    public function setAccountsPayableGLAccountKey($AccountsPayableGLAccountKey)
    {
      $this->AccountsPayableGLAccountKey = $AccountsPayableGLAccountKey;
      return $this;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getAccruedPurchasesGLAccountKey()
    {
      return $this->AccruedPurchasesGLAccountKey;
    }

    /**
     * @param GLAccountNumberKey $AccruedPurchasesGLAccountKey
     * @return Vendor
     */
    public function setAccruedPurchasesGLAccountKey($AccruedPurchasesGLAccountKey)
    {
      $this->AccruedPurchasesGLAccountKey = $AccruedPurchasesGLAccountKey;
      return $this;
    }

    /**
     * @return ArrayOfVendorAddress
     */
    public function getAddresses()
    {
      return $this->Addresses;
    }

    /**
     * @param ArrayOfVendorAddress $Addresses
     * @return Vendor
     */
    public function setAddresses($Addresses)
    {
      $this->Addresses = $Addresses;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowRevaluation()
    {
      return $this->AllowRevaluation;
    }

    /**
     * @param boolean $AllowRevaluation
     * @return Vendor
     */
    public function setAllowRevaluation($AllowRevaluation)
    {
      $this->AllowRevaluation = $AllowRevaluation;
      return $this;
    }

    /**
     * @return BankAccountKey
     */
    public function getBankAccountKey()
    {
      return $this->BankAccountKey;
    }

    /**
     * @param BankAccountKey $BankAccountKey
     * @return Vendor
     */
    public function setBankAccountKey($BankAccountKey)
    {
      $this->BankAccountKey = $BankAccountKey;
      return $this;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getCashGLAccountKey()
    {
      return $this->CashGLAccountKey;
    }

    /**
     * @param GLAccountNumberKey $CashGLAccountKey
     * @return Vendor
     */
    public function setCashGLAccountKey($CashGLAccountKey)
    {
      $this->CashGLAccountKey = $CashGLAccountKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getCheckName()
    {
      return $this->CheckName;
    }

    /**
     * @param string $CheckName
     * @return Vendor
     */
    public function setCheckName($CheckName)
    {
      $this->CheckName = $CheckName;
      return $this;
    }

    /**
     * @return VendorClassKey
     */
    public function getClassKey()
    {
      return $this->ClassKey;
    }

    /**
     * @param VendorClassKey $ClassKey
     * @return Vendor
     */
    public function setClassKey($ClassKey)
    {
      $this->ClassKey = $ClassKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getComment1()
    {
      return $this->Comment1;
    }

    /**
     * @param string $Comment1
     * @return Vendor
     */
    public function setComment1($Comment1)
    {
      $this->Comment1 = $Comment1;
      return $this;
    }

    /**
     * @return string
     */
    public function getComment2()
    {
      return $this->Comment2;
    }

    /**
     * @param string $Comment2
     * @return Vendor
     */
    public function setComment2($Comment2)
    {
      $this->Comment2 = $Comment2;
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
     * @return Vendor
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
     * @return VendorCreditLimit
     */
    public function getCreditLimit()
    {
      return $this->CreditLimit;
    }

    /**
     * @param VendorCreditLimit $CreditLimit
     * @return Vendor
     */
    public function setCreditLimit($CreditLimit)
    {
      $this->CreditLimit = $CreditLimit;
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
     * @return Vendor
     */
    public function setCurrencyKey($CurrencyKey)
    {
      $this->CurrencyKey = $CurrencyKey;
      return $this;
    }

    /**
     * @return VendorAddressKey
     */
    public function getDefaultAddressKey()
    {
      return $this->DefaultAddressKey;
    }

    /**
     * @param VendorAddressKey $DefaultAddressKey
     * @return Vendor
     */
    public function setDefaultAddressKey($DefaultAddressKey)
    {
      $this->DefaultAddressKey = $DefaultAddressKey;
      return $this;
    }

    /**
     * @return PayablesCashAccountType
     */
    public function getDefaultCashAccountType()
    {
      return $this->DefaultCashAccountType;
    }

    /**
     * @param PayablesCashAccountType $DefaultCashAccountType
     * @return Vendor
     */
    public function setDefaultCashAccountType($DefaultCashAccountType)
    {
      $this->DefaultCashAccountType = $DefaultCashAccountType;
      return $this;
    }

    /**
     * @return int
     */
    public function getDiscountGracePeriod()
    {
      return $this->DiscountGracePeriod;
    }

    /**
     * @param int $DiscountGracePeriod
     * @return Vendor
     */
    public function setDiscountGracePeriod($DiscountGracePeriod)
    {
      $this->DiscountGracePeriod = $DiscountGracePeriod;
      return $this;
    }

    /**
     * @return int
     */
    public function getDueDateGracePeriod()
    {
      return $this->DueDateGracePeriod;
    }

    /**
     * @param int $DueDateGracePeriod
     * @return Vendor
     */
    public function setDueDateGracePeriod($DueDateGracePeriod)
    {
      $this->DueDateGracePeriod = $DueDateGracePeriod;
      return $this;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getFinanceChargesGLAccountKey()
    {
      return $this->FinanceChargesGLAccountKey;
    }

    /**
     * @param GLAccountNumberKey $FinanceChargesGLAccountKey
     * @return Vendor
     */
    public function setFinanceChargesGLAccountKey($FinanceChargesGLAccountKey)
    {
      $this->FinanceChargesGLAccountKey = $FinanceChargesGLAccountKey;
      return $this;
    }

    /**
     * @return FreeOnBoard
     */
    public function getFreeOnBoard()
    {
      return $this->FreeOnBoard;
    }

    /**
     * @param FreeOnBoard $FreeOnBoard
     * @return Vendor
     */
    public function setFreeOnBoard($FreeOnBoard)
    {
      $this->FreeOnBoard = $FreeOnBoard;
      return $this;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getFreightGLAccountKey()
    {
      return $this->FreightGLAccountKey;
    }

    /**
     * @param GLAccountNumberKey $FreightGLAccountKey
     * @return Vendor
     */
    public function setFreightGLAccountKey($FreightGLAccountKey)
    {
      $this->FreightGLAccountKey = $FreightGLAccountKey;
      return $this;
    }

    /**
     * @return HistoryOptions
     */
    public function getHistoryOptions()
    {
      return $this->HistoryOptions;
    }

    /**
     * @param HistoryOptions $HistoryOptions
     * @return Vendor
     */
    public function setHistoryOptions($HistoryOptions)
    {
      $this->HistoryOptions = $HistoryOptions;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsActive()
    {
      return $this->IsActive;
    }

    /**
     * @param boolean $IsActive
     * @return Vendor
     */
    public function setIsActive($IsActive)
    {
      $this->IsActive = $IsActive;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsOnHold()
    {
      return $this->IsOnHold;
    }

    /**
     * @param boolean $IsOnHold
     * @return Vendor
     */
    public function setIsOnHold($IsOnHold)
    {
      $this->IsOnHold = $IsOnHold;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsOneTime()
    {
      return $this->IsOneTime;
    }

    /**
     * @param boolean $IsOneTime
     * @return Vendor
     */
    public function setIsOneTime($IsOneTime)
    {
      $this->IsOneTime = $IsOneTime;
      return $this;
    }

    /**
     * @return VendorKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param VendorKey $Key
     * @return Vendor
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
      return $this->Language;
    }

    /**
     * @param string $Language
     * @return Vendor
     */
    public function setLanguage($Language)
    {
      $this->Language = $Language;
      return $this;
    }

    /**
     * @return MaximumInvoice
     */
    public function getMaximumInvoice()
    {
      return $this->MaximumInvoice;
    }

    /**
     * @param MaximumInvoice $MaximumInvoice
     * @return Vendor
     */
    public function setMaximumInvoice($MaximumInvoice)
    {
      $this->MaximumInvoice = $MaximumInvoice;
      return $this;
    }

    /**
     * @return MaximumWriteoff
     */
    public function getMaximumWriteoff()
    {
      return $this->MaximumWriteoff;
    }

    /**
     * @param MaximumWriteoff $MaximumWriteoff
     * @return Vendor
     */
    public function setMaximumWriteoff($MaximumWriteoff)
    {
      $this->MaximumWriteoff = $MaximumWriteoff;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getMinimumOrderAmount()
    {
      return $this->MinimumOrderAmount;
    }

    /**
     * @param MoneyAmount $MinimumOrderAmount
     * @return Vendor
     */
    public function setMinimumOrderAmount($MinimumOrderAmount)
    {
      $this->MinimumOrderAmount = $MinimumOrderAmount;
      return $this;
    }

    /**
     * @return MoneyPercentChoice
     */
    public function getMinimumPayment()
    {
      return $this->MinimumPayment;
    }

    /**
     * @param MoneyPercentChoice $MinimumPayment
     * @return Vendor
     */
    public function setMinimumPayment($MinimumPayment)
    {
      $this->MinimumPayment = $MinimumPayment;
      return $this;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getMiscellaneousGLAccountKey()
    {
      return $this->MiscellaneousGLAccountKey;
    }

    /**
     * @param GLAccountNumberKey $MiscellaneousGLAccountKey
     * @return Vendor
     */
    public function setMiscellaneousGLAccountKey($MiscellaneousGLAccountKey)
    {
      $this->MiscellaneousGLAccountKey = $MiscellaneousGLAccountKey;
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
     * @return Vendor
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
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return Vendor
     */
    public function setName($Name)
    {
      $this->Name = $Name;
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
     * @return Vendor
     */
    public function setNotes($Notes)
    {
      $this->Notes = $Notes;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentPriority()
    {
      return $this->PaymentPriority;
    }

    /**
     * @param string $PaymentPriority
     * @return Vendor
     */
    public function setPaymentPriority($PaymentPriority)
    {
      $this->PaymentPriority = $PaymentPriority;
      return $this;
    }

    /**
     * @return PaymentTermsKey
     */
    public function getPaymentTermsKey()
    {
      return $this->PaymentTermsKey;
    }

    /**
     * @param PaymentTermsKey $PaymentTermsKey
     * @return Vendor
     */
    public function setPaymentTermsKey($PaymentTermsKey)
    {
      $this->PaymentTermsKey = $PaymentTermsKey;
      return $this;
    }

    /**
     * @return PayablesPostResultsTo
     */
    public function getPostResultsTo()
    {
      return $this->PostResultsTo;
    }

    /**
     * @param PayablesPostResultsTo $PostResultsTo
     * @return Vendor
     */
    public function setPostResultsTo($PostResultsTo)
    {
      $this->PostResultsTo = $PostResultsTo;
      return $this;
    }

    /**
     * @return ProjectAccountingOptions
     */
    public function getProjectAccountingOptions()
    {
      return $this->ProjectAccountingOptions;
    }

    /**
     * @param ProjectAccountingOptions $ProjectAccountingOptions
     * @return Vendor
     */
    public function setProjectAccountingOptions($ProjectAccountingOptions)
    {
      $this->ProjectAccountingOptions = $ProjectAccountingOptions;
      return $this;
    }

    /**
     * @return VendorAddressKey
     */
    public function getPurchaseAddressKey()
    {
      return $this->PurchaseAddressKey;
    }

    /**
     * @param VendorAddressKey $PurchaseAddressKey
     * @return Vendor
     */
    public function setPurchaseAddressKey($PurchaseAddressKey)
    {
      $this->PurchaseAddressKey = $PurchaseAddressKey;
      return $this;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getPurchasePriceVarianceGLAccountKey()
    {
      return $this->PurchasePriceVarianceGLAccountKey;
    }

    /**
     * @param GLAccountNumberKey $PurchasePriceVarianceGLAccountKey
     * @return Vendor
     */
    public function setPurchasePriceVarianceGLAccountKey($PurchasePriceVarianceGLAccountKey)
    {
      $this->PurchasePriceVarianceGLAccountKey = $PurchasePriceVarianceGLAccountKey;
      return $this;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getPurchasesGLAccountKey()
    {
      return $this->PurchasesGLAccountKey;
    }

    /**
     * @param GLAccountNumberKey $PurchasesGLAccountKey
     * @return Vendor
     */
    public function setPurchasesGLAccountKey($PurchasesGLAccountKey)
    {
      $this->PurchasesGLAccountKey = $PurchasesGLAccountKey;
      return $this;
    }

    /**
     * @return RateTypeKey
     */
    public function getRateTypeKey()
    {
      return $this->RateTypeKey;
    }

    /**
     * @param RateTypeKey $RateTypeKey
     * @return Vendor
     */
    public function setRateTypeKey($RateTypeKey)
    {
      $this->RateTypeKey = $RateTypeKey;
      return $this;
    }

    /**
     * @return VendorAddressKey
     */
    public function getRemitToAddressKey()
    {
      return $this->RemitToAddressKey;
    }

    /**
     * @param VendorAddressKey $RemitToAddressKey
     * @return Vendor
     */
    public function setRemitToAddressKey($RemitToAddressKey)
    {
      $this->RemitToAddressKey = $RemitToAddressKey;
      return $this;
    }

    /**
     * @return VendorAddressKey
     */
    public function getShipFromAddressKey()
    {
      return $this->ShipFromAddressKey;
    }

    /**
     * @param VendorAddressKey $ShipFromAddressKey
     * @return Vendor
     */
    public function setShipFromAddressKey($ShipFromAddressKey)
    {
      $this->ShipFromAddressKey = $ShipFromAddressKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getShortName()
    {
      return $this->ShortName;
    }

    /**
     * @param string $ShortName
     * @return Vendor
     */
    public function setShortName($ShortName)
    {
      $this->ShortName = $ShortName;
      return $this;
    }

    /**
     * @return int
     */
    public function getTax1099BoxNumber()
    {
      return $this->Tax1099BoxNumber;
    }

    /**
     * @param int $Tax1099BoxNumber
     * @return Vendor
     */
    public function setTax1099BoxNumber($Tax1099BoxNumber)
    {
      $this->Tax1099BoxNumber = $Tax1099BoxNumber;
      return $this;
    }

    /**
     * @return Tax1099Type
     */
    public function getTax1099Type()
    {
      return $this->Tax1099Type;
    }

    /**
     * @param Tax1099Type $Tax1099Type
     * @return Vendor
     */
    public function setTax1099Type($Tax1099Type)
    {
      $this->Tax1099Type = $Tax1099Type;
      return $this;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getTaxGLAccountKey()
    {
      return $this->TaxGLAccountKey;
    }

    /**
     * @param GLAccountNumberKey $TaxGLAccountKey
     * @return Vendor
     */
    public function setTaxGLAccountKey($TaxGLAccountKey)
    {
      $this->TaxGLAccountKey = $TaxGLAccountKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getTaxIdentificationNumber()
    {
      return $this->TaxIdentificationNumber;
    }

    /**
     * @param string $TaxIdentificationNumber
     * @return Vendor
     */
    public function setTaxIdentificationNumber($TaxIdentificationNumber)
    {
      $this->TaxIdentificationNumber = $TaxIdentificationNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getTaxRegistrationNumber()
    {
      return $this->TaxRegistrationNumber;
    }

    /**
     * @param string $TaxRegistrationNumber
     * @return Vendor
     */
    public function setTaxRegistrationNumber($TaxRegistrationNumber)
    {
      $this->TaxRegistrationNumber = $TaxRegistrationNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getTaxSchedule()
    {
      return $this->TaxSchedule;
    }

    /**
     * @param string $TaxSchedule
     * @return Vendor
     */
    public function setTaxSchedule($TaxSchedule)
    {
      $this->TaxSchedule = $TaxSchedule;
      return $this;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getTermsDiscountAvailableGLAccountKey()
    {
      return $this->TermsDiscountAvailableGLAccountKey;
    }

    /**
     * @param GLAccountNumberKey $TermsDiscountAvailableGLAccountKey
     * @return Vendor
     */
    public function setTermsDiscountAvailableGLAccountKey($TermsDiscountAvailableGLAccountKey)
    {
      $this->TermsDiscountAvailableGLAccountKey = $TermsDiscountAvailableGLAccountKey;
      return $this;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getTermsDiscountTakenGLAccountKey()
    {
      return $this->TermsDiscountTakenGLAccountKey;
    }

    /**
     * @param GLAccountNumberKey $TermsDiscountTakenGLAccountKey
     * @return Vendor
     */
    public function setTermsDiscountTakenGLAccountKey($TermsDiscountTakenGLAccountKey)
    {
      $this->TermsDiscountTakenGLAccountKey = $TermsDiscountTakenGLAccountKey;
      return $this;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getTradeDiscountGLAccountKey()
    {
      return $this->TradeDiscountGLAccountKey;
    }

    /**
     * @param GLAccountNumberKey $TradeDiscountGLAccountKey
     * @return Vendor
     */
    public function setTradeDiscountGLAccountKey($TradeDiscountGLAccountKey)
    {
      $this->TradeDiscountGLAccountKey = $TradeDiscountGLAccountKey;
      return $this;
    }

    /**
     * @return Percent
     */
    public function getTradeDiscountPercent()
    {
      return $this->TradeDiscountPercent;
    }

    /**
     * @param Percent $TradeDiscountPercent
     * @return Vendor
     */
    public function setTradeDiscountPercent($TradeDiscountPercent)
    {
      $this->TradeDiscountPercent = $TradeDiscountPercent;
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
     * @return Vendor
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
     * @return Vendor
     */
    public function setUserDefined2($UserDefined2)
    {
      $this->UserDefined2 = $UserDefined2;
      return $this;
    }

    /**
     * @return LanguageKey
     */
    public function getUserLanguageKey()
    {
      return $this->UserLanguageKey;
    }

    /**
     * @param LanguageKey $UserLanguageKey
     * @return Vendor
     */
    public function setUserLanguageKey($UserLanguageKey)
    {
      $this->UserLanguageKey = $UserLanguageKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getVendorAccountNumber()
    {
      return $this->VendorAccountNumber;
    }

    /**
     * @param string $VendorAccountNumber
     * @return Vendor
     */
    public function setVendorAccountNumber($VendorAccountNumber)
    {
      $this->VendorAccountNumber = $VendorAccountNumber;
      return $this;
    }

    /**
     * @return WorkflowPriority
     */
    public function getWorkflowPriority()
    {
      return $this->WorkflowPriority;
    }

    /**
     * @param WorkflowPriority $WorkflowPriority
     * @return Vendor
     */
    public function setWorkflowPriority($WorkflowPriority)
    {
      $this->WorkflowPriority = $WorkflowPriority;
      return $this;
    }

    /**
     * @return ArrayOfWorkflow
     */
    public function getWorkflows()
    {
      return $this->Workflows;
    }

    /**
     * @param ArrayOfWorkflow $Workflows
     * @return Vendor
     */
    public function setWorkflows($Workflows)
    {
      $this->Workflows = $Workflows;
      return $this;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getWriteoffGLAccountKey()
    {
      return $this->WriteoffGLAccountKey;
    }

    /**
     * @param GLAccountNumberKey $WriteoffGLAccountKey
     * @return Vendor
     */
    public function setWriteoffGLAccountKey($WriteoffGLAccountKey)
    {
      $this->WriteoffGLAccountKey = $WriteoffGLAccountKey;
      return $this;
    }

}
