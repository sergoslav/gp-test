<?php

class Customer extends BusinessObject
{

    /**
     * @var GLAccountNumberKey $AccountsReceivableGLAccountKey
     */
    protected $AccountsReceivableGLAccountKey = null;

    /**
     * @var ArrayOfCustomerAddress $Addresses
     */
    protected $Addresses = null;

    /**
     * @var boolean $AllowRevaluation
     */
    protected $AllowRevaluation = null;

    /**
     * @var BalanceType $BalanceType
     */
    protected $BalanceType = null;

    /**
     * @var BankAccountKey $BankAccountKey
     */
    protected $BankAccountKey = null;

    /**
     * @var string $BankBranch
     */
    protected $BankBranch = null;

    /**
     * @var string $BankName
     */
    protected $BankName = null;

    /**
     * @var CustomerAddressKey $BillToAddressKey
     */
    protected $BillToAddressKey = null;

    /**
     * @var GLAccountNumberKey $CashGLAccountKey
     */
    protected $CashGLAccountKey = null;

    /**
     * @var CustomerClassKey $ClassKey
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
     * @var CustomerKey $CorporateAccountKey
     */
    protected $CorporateAccountKey = null;

    /**
     * @var GLAccountNumberKey $CostOfGoodsSoldGLAccountKey
     */
    protected $CostOfGoodsSoldGLAccountKey = null;

    /**
     * @var \DateTime $CreatedDate
     */
    protected $CreatedDate = null;

    /**
     * @var CustomerCreditLimit $CreditLimit
     */
    protected $CreditLimit = null;

    /**
     * @var CurrencyKey $CurrencyKey
     */
    protected $CurrencyKey = null;

    /**
     * @var CustomerAddressKey $DefaultAddressKey
     */
    protected $DefaultAddressKey = null;

    /**
     * @var ReceivablesCashAccountType $DefaultCashAccountType
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
     * @var MoneyPercentChoice $FinanceCharge
     */
    protected $FinanceCharge = null;

    /**
     * @var GLAccountNumberKey $FinanceChargesGLAccountKey
     */
    protected $FinanceChargesGLAccountKey = null;

    /**
     * @var HistoryOptions $HistoryOptions
     */
    protected $HistoryOptions = null;

    /**
     * @var boolean $IncludeInDemandPlanning
     */
    protected $IncludeInDemandPlanning = null;

    /**
     * @var GLAccountNumberKey $InventoryGLAccountKey
     */
    protected $InventoryGLAccountKey = null;

    /**
     * @var boolean $IsActive
     */
    protected $IsActive = null;

    /**
     * @var boolean $IsOnHold
     */
    protected $IsOnHold = null;

    /**
     * @var CustomerKey $Key
     */
    protected $Key = null;

    /**
     * @var \DateTime $LastModifiedDate
     */
    protected $LastModifiedDate = null;

    /**
     * @var MaximumWriteoff $MaximumWriteoff
     */
    protected $MaximumWriteoff = null;

    /**
     * @var MoneyPercentChoice $MinimumPayment
     */
    protected $MinimumPayment = null;

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
     * @var OrderFullfillmentShortage $OrderFullfillmentShortageDefault
     */
    protected $OrderFullfillmentShortageDefault = null;

    /**
     * @var GLAccountNumberKey $OverpaymentWriteoffGLAccountKey
     */
    protected $OverpaymentWriteoffGLAccountKey = null;

    /**
     * @var PaymentCardAccount $PaymentCardAccount
     */
    protected $PaymentCardAccount = null;

    /**
     * @var GLAccountNumberKey $PaymentTermsDiscountAvailableGLAccountKey
     */
    protected $PaymentTermsDiscountAvailableGLAccountKey = null;

    /**
     * @var GLAccountNumberKey $PaymentTermsDiscountTakenGLAccountKey
     */
    protected $PaymentTermsDiscountTakenGLAccountKey = null;

    /**
     * @var PaymentTermsKey $PaymentTermsKey
     */
    protected $PaymentTermsKey = null;

    /**
     * @var ReceivablesPostResultsTo $PostResultsTo
     */
    protected $PostResultsTo = null;

    /**
     * @var PriceLevelKey $PriceLevelKey
     */
    protected $PriceLevelKey = null;

    /**
     * @var int $Priority
     */
    protected $Priority = null;

    /**
     * @var RateTypeKey $RateTypeKey
     */
    protected $RateTypeKey = null;

    /**
     * @var GLAccountNumberKey $SalesGLAccountKey
     */
    protected $SalesGLAccountKey = null;

    /**
     * @var GLAccountNumberKey $SalesOrderReturnsGLAccountKey
     */
    protected $SalesOrderReturnsGLAccountKey = null;

    /**
     * @var boolean $SendEmailStatements
     */
    protected $SendEmailStatements = null;

    /**
     * @var boolean $ShipCompleteOnly
     */
    protected $ShipCompleteOnly = null;

    /**
     * @var CustomerAddressKey $ShipToAddressKey
     */
    protected $ShipToAddressKey = null;

    /**
     * @var string $Shortname
     */
    protected $Shortname = null;

    /**
     * @var StatementCycle $StatementCycle
     */
    protected $StatementCycle = null;

    /**
     * @var string $StatementName
     */
    protected $StatementName = null;

    /**
     * @var EmailRecipients $StatementRecipients
     */
    protected $StatementRecipients = null;

    /**
     * @var CustomerAddressKey $StatementToAddressKey
     */
    protected $StatementToAddressKey = null;

    /**
     * @var ArrayOfstring $TaxExemptNumbers
     */
    protected $TaxExemptNumbers = null;

    /**
     * @var string $TaxRegistrationNumber
     */
    protected $TaxRegistrationNumber = null;

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
    public function getAccountsReceivableGLAccountKey()
    {
      return $this->AccountsReceivableGLAccountKey;
    }

    /**
     * @param GLAccountNumberKey $AccountsReceivableGLAccountKey
     * @return Customer
     */
    public function setAccountsReceivableGLAccountKey($AccountsReceivableGLAccountKey)
    {
      $this->AccountsReceivableGLAccountKey = $AccountsReceivableGLAccountKey;
      return $this;
    }

    /**
     * @return ArrayOfCustomerAddress
     */
    public function getAddresses()
    {
      return $this->Addresses;
    }

    /**
     * @param ArrayOfCustomerAddress $Addresses
     * @return Customer
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
     * @return Customer
     */
    public function setAllowRevaluation($AllowRevaluation)
    {
      $this->AllowRevaluation = $AllowRevaluation;
      return $this;
    }

    /**
     * @return BalanceType
     */
    public function getBalanceType()
    {
      return $this->BalanceType;
    }

    /**
     * @param BalanceType $BalanceType
     * @return Customer
     */
    public function setBalanceType($BalanceType)
    {
      $this->BalanceType = $BalanceType;
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
     * @return Customer
     */
    public function setBankAccountKey($BankAccountKey)
    {
      $this->BankAccountKey = $BankAccountKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getBankBranch()
    {
      return $this->BankBranch;
    }

    /**
     * @param string $BankBranch
     * @return Customer
     */
    public function setBankBranch($BankBranch)
    {
      $this->BankBranch = $BankBranch;
      return $this;
    }

    /**
     * @return string
     */
    public function getBankName()
    {
      return $this->BankName;
    }

    /**
     * @param string $BankName
     * @return Customer
     */
    public function setBankName($BankName)
    {
      $this->BankName = $BankName;
      return $this;
    }

    /**
     * @return CustomerAddressKey
     */
    public function getBillToAddressKey()
    {
      return $this->BillToAddressKey;
    }

    /**
     * @param CustomerAddressKey $BillToAddressKey
     * @return Customer
     */
    public function setBillToAddressKey($BillToAddressKey)
    {
      $this->BillToAddressKey = $BillToAddressKey;
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
     * @return Customer
     */
    public function setCashGLAccountKey($CashGLAccountKey)
    {
      $this->CashGLAccountKey = $CashGLAccountKey;
      return $this;
    }

    /**
     * @return CustomerClassKey
     */
    public function getClassKey()
    {
      return $this->ClassKey;
    }

    /**
     * @param CustomerClassKey $ClassKey
     * @return Customer
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
     * @return Customer
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
     * @return Customer
     */
    public function setComment2($Comment2)
    {
      $this->Comment2 = $Comment2;
      return $this;
    }

    /**
     * @return CustomerKey
     */
    public function getCorporateAccountKey()
    {
      return $this->CorporateAccountKey;
    }

    /**
     * @param CustomerKey $CorporateAccountKey
     * @return Customer
     */
    public function setCorporateAccountKey($CorporateAccountKey)
    {
      $this->CorporateAccountKey = $CorporateAccountKey;
      return $this;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getCostOfGoodsSoldGLAccountKey()
    {
      return $this->CostOfGoodsSoldGLAccountKey;
    }

    /**
     * @param GLAccountNumberKey $CostOfGoodsSoldGLAccountKey
     * @return Customer
     */
    public function setCostOfGoodsSoldGLAccountKey($CostOfGoodsSoldGLAccountKey)
    {
      $this->CostOfGoodsSoldGLAccountKey = $CostOfGoodsSoldGLAccountKey;
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
     * @return Customer
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
     * @return CustomerCreditLimit
     */
    public function getCreditLimit()
    {
      return $this->CreditLimit;
    }

    /**
     * @param CustomerCreditLimit $CreditLimit
     * @return Customer
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
     * @return Customer
     */
    public function setCurrencyKey($CurrencyKey)
    {
      $this->CurrencyKey = $CurrencyKey;
      return $this;
    }

    /**
     * @return CustomerAddressKey
     */
    public function getDefaultAddressKey()
    {
      return $this->DefaultAddressKey;
    }

    /**
     * @param CustomerAddressKey $DefaultAddressKey
     * @return Customer
     */
    public function setDefaultAddressKey($DefaultAddressKey)
    {
      $this->DefaultAddressKey = $DefaultAddressKey;
      return $this;
    }

    /**
     * @return ReceivablesCashAccountType
     */
    public function getDefaultCashAccountType()
    {
      return $this->DefaultCashAccountType;
    }

    /**
     * @param ReceivablesCashAccountType $DefaultCashAccountType
     * @return Customer
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
     * @return Customer
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
     * @return Customer
     */
    public function setDueDateGracePeriod($DueDateGracePeriod)
    {
      $this->DueDateGracePeriod = $DueDateGracePeriod;
      return $this;
    }

    /**
     * @return MoneyPercentChoice
     */
    public function getFinanceCharge()
    {
      return $this->FinanceCharge;
    }

    /**
     * @param MoneyPercentChoice $FinanceCharge
     * @return Customer
     */
    public function setFinanceCharge($FinanceCharge)
    {
      $this->FinanceCharge = $FinanceCharge;
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
     * @return Customer
     */
    public function setFinanceChargesGLAccountKey($FinanceChargesGLAccountKey)
    {
      $this->FinanceChargesGLAccountKey = $FinanceChargesGLAccountKey;
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
     * @return Customer
     */
    public function setHistoryOptions($HistoryOptions)
    {
      $this->HistoryOptions = $HistoryOptions;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeInDemandPlanning()
    {
      return $this->IncludeInDemandPlanning;
    }

    /**
     * @param boolean $IncludeInDemandPlanning
     * @return Customer
     */
    public function setIncludeInDemandPlanning($IncludeInDemandPlanning)
    {
      $this->IncludeInDemandPlanning = $IncludeInDemandPlanning;
      return $this;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getInventoryGLAccountKey()
    {
      return $this->InventoryGLAccountKey;
    }

    /**
     * @param GLAccountNumberKey $InventoryGLAccountKey
     * @return Customer
     */
    public function setInventoryGLAccountKey($InventoryGLAccountKey)
    {
      $this->InventoryGLAccountKey = $InventoryGLAccountKey;
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
     * @return Customer
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
     * @return Customer
     */
    public function setIsOnHold($IsOnHold)
    {
      $this->IsOnHold = $IsOnHold;
      return $this;
    }

    /**
     * @return CustomerKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param CustomerKey $Key
     * @return Customer
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastModifiedDate()
    {
      if ($this->LastModifiedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastModifiedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastModifiedDate
     * @return Customer
     */
    public function setLastModifiedDate(\DateTime $LastModifiedDate = null)
    {
      if ($LastModifiedDate == null) {
       $this->LastModifiedDate = null;
      } else {
        $this->LastModifiedDate = $LastModifiedDate->format(\DateTime::ATOM);
      }
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
     * @return Customer
     */
    public function setMaximumWriteoff($MaximumWriteoff)
    {
      $this->MaximumWriteoff = $MaximumWriteoff;
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
     * @return Customer
     */
    public function setMinimumPayment($MinimumPayment)
    {
      $this->MinimumPayment = $MinimumPayment;
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
     * @return Customer
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
     * @return Customer
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
     * @return Customer
     */
    public function setNotes($Notes)
    {
      $this->Notes = $Notes;
      return $this;
    }

    /**
     * @return OrderFullfillmentShortage
     */
    public function getOrderFullfillmentShortageDefault()
    {
      return $this->OrderFullfillmentShortageDefault;
    }

    /**
     * @param OrderFullfillmentShortage $OrderFullfillmentShortageDefault
     * @return Customer
     */
    public function setOrderFullfillmentShortageDefault($OrderFullfillmentShortageDefault)
    {
      $this->OrderFullfillmentShortageDefault = $OrderFullfillmentShortageDefault;
      return $this;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getOverpaymentWriteoffGLAccountKey()
    {
      return $this->OverpaymentWriteoffGLAccountKey;
    }

    /**
     * @param GLAccountNumberKey $OverpaymentWriteoffGLAccountKey
     * @return Customer
     */
    public function setOverpaymentWriteoffGLAccountKey($OverpaymentWriteoffGLAccountKey)
    {
      $this->OverpaymentWriteoffGLAccountKey = $OverpaymentWriteoffGLAccountKey;
      return $this;
    }

    /**
     * @return PaymentCardAccount
     */
    public function getPaymentCardAccount()
    {
      return $this->PaymentCardAccount;
    }

    /**
     * @param PaymentCardAccount $PaymentCardAccount
     * @return Customer
     */
    public function setPaymentCardAccount($PaymentCardAccount)
    {
      $this->PaymentCardAccount = $PaymentCardAccount;
      return $this;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getPaymentTermsDiscountAvailableGLAccountKey()
    {
      return $this->PaymentTermsDiscountAvailableGLAccountKey;
    }

    /**
     * @param GLAccountNumberKey $PaymentTermsDiscountAvailableGLAccountKey
     * @return Customer
     */
    public function setPaymentTermsDiscountAvailableGLAccountKey($PaymentTermsDiscountAvailableGLAccountKey)
    {
      $this->PaymentTermsDiscountAvailableGLAccountKey = $PaymentTermsDiscountAvailableGLAccountKey;
      return $this;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getPaymentTermsDiscountTakenGLAccountKey()
    {
      return $this->PaymentTermsDiscountTakenGLAccountKey;
    }

    /**
     * @param GLAccountNumberKey $PaymentTermsDiscountTakenGLAccountKey
     * @return Customer
     */
    public function setPaymentTermsDiscountTakenGLAccountKey($PaymentTermsDiscountTakenGLAccountKey)
    {
      $this->PaymentTermsDiscountTakenGLAccountKey = $PaymentTermsDiscountTakenGLAccountKey;
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
     * @return Customer
     */
    public function setPaymentTermsKey($PaymentTermsKey)
    {
      $this->PaymentTermsKey = $PaymentTermsKey;
      return $this;
    }

    /**
     * @return ReceivablesPostResultsTo
     */
    public function getPostResultsTo()
    {
      return $this->PostResultsTo;
    }

    /**
     * @param ReceivablesPostResultsTo $PostResultsTo
     * @return Customer
     */
    public function setPostResultsTo($PostResultsTo)
    {
      $this->PostResultsTo = $PostResultsTo;
      return $this;
    }

    /**
     * @return PriceLevelKey
     */
    public function getPriceLevelKey()
    {
      return $this->PriceLevelKey;
    }

    /**
     * @param PriceLevelKey $PriceLevelKey
     * @return Customer
     */
    public function setPriceLevelKey($PriceLevelKey)
    {
      $this->PriceLevelKey = $PriceLevelKey;
      return $this;
    }

    /**
     * @return int
     */
    public function getPriority()
    {
      return $this->Priority;
    }

    /**
     * @param int $Priority
     * @return Customer
     */
    public function setPriority($Priority)
    {
      $this->Priority = $Priority;
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
     * @return Customer
     */
    public function setRateTypeKey($RateTypeKey)
    {
      $this->RateTypeKey = $RateTypeKey;
      return $this;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getSalesGLAccountKey()
    {
      return $this->SalesGLAccountKey;
    }

    /**
     * @param GLAccountNumberKey $SalesGLAccountKey
     * @return Customer
     */
    public function setSalesGLAccountKey($SalesGLAccountKey)
    {
      $this->SalesGLAccountKey = $SalesGLAccountKey;
      return $this;
    }

    /**
     * @return GLAccountNumberKey
     */
    public function getSalesOrderReturnsGLAccountKey()
    {
      return $this->SalesOrderReturnsGLAccountKey;
    }

    /**
     * @param GLAccountNumberKey $SalesOrderReturnsGLAccountKey
     * @return Customer
     */
    public function setSalesOrderReturnsGLAccountKey($SalesOrderReturnsGLAccountKey)
    {
      $this->SalesOrderReturnsGLAccountKey = $SalesOrderReturnsGLAccountKey;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSendEmailStatements()
    {
      return $this->SendEmailStatements;
    }

    /**
     * @param boolean $SendEmailStatements
     * @return Customer
     */
    public function setSendEmailStatements($SendEmailStatements)
    {
      $this->SendEmailStatements = $SendEmailStatements;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShipCompleteOnly()
    {
      return $this->ShipCompleteOnly;
    }

    /**
     * @param boolean $ShipCompleteOnly
     * @return Customer
     */
    public function setShipCompleteOnly($ShipCompleteOnly)
    {
      $this->ShipCompleteOnly = $ShipCompleteOnly;
      return $this;
    }

    /**
     * @return CustomerAddressKey
     */
    public function getShipToAddressKey()
    {
      return $this->ShipToAddressKey;
    }

    /**
     * @param CustomerAddressKey $ShipToAddressKey
     * @return Customer
     */
    public function setShipToAddressKey($ShipToAddressKey)
    {
      $this->ShipToAddressKey = $ShipToAddressKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getShortname()
    {
      return $this->Shortname;
    }

    /**
     * @param string $Shortname
     * @return Customer
     */
    public function setShortname($Shortname)
    {
      $this->Shortname = $Shortname;
      return $this;
    }

    /**
     * @return StatementCycle
     */
    public function getStatementCycle()
    {
      return $this->StatementCycle;
    }

    /**
     * @param StatementCycle $StatementCycle
     * @return Customer
     */
    public function setStatementCycle($StatementCycle)
    {
      $this->StatementCycle = $StatementCycle;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatementName()
    {
      return $this->StatementName;
    }

    /**
     * @param string $StatementName
     * @return Customer
     */
    public function setStatementName($StatementName)
    {
      $this->StatementName = $StatementName;
      return $this;
    }

    /**
     * @return EmailRecipients
     */
    public function getStatementRecipients()
    {
      return $this->StatementRecipients;
    }

    /**
     * @param EmailRecipients $StatementRecipients
     * @return Customer
     */
    public function setStatementRecipients($StatementRecipients)
    {
      $this->StatementRecipients = $StatementRecipients;
      return $this;
    }

    /**
     * @return CustomerAddressKey
     */
    public function getStatementToAddressKey()
    {
      return $this->StatementToAddressKey;
    }

    /**
     * @param CustomerAddressKey $StatementToAddressKey
     * @return Customer
     */
    public function setStatementToAddressKey($StatementToAddressKey)
    {
      $this->StatementToAddressKey = $StatementToAddressKey;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getTaxExemptNumbers()
    {
      return $this->TaxExemptNumbers;
    }

    /**
     * @param ArrayOfstring $TaxExemptNumbers
     * @return Customer
     */
    public function setTaxExemptNumbers($TaxExemptNumbers)
    {
      $this->TaxExemptNumbers = $TaxExemptNumbers;
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
     * @return Customer
     */
    public function setTaxRegistrationNumber($TaxRegistrationNumber)
    {
      $this->TaxRegistrationNumber = $TaxRegistrationNumber;
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
     * @return Customer
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
     * @return Customer
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
     * @return Customer
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
     * @return Customer
     */
    public function setUserLanguageKey($UserLanguageKey)
    {
      $this->UserLanguageKey = $UserLanguageKey;
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
     * @return Customer
     */
    public function setWriteoffGLAccountKey($WriteoffGLAccountKey)
    {
      $this->WriteoffGLAccountKey = $WriteoffGLAccountKey;
      return $this;
    }

}
