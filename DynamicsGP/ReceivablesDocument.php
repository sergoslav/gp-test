<?php

class ReceivablesDocument extends BusinessObject
{

    /**
     * @var CustomerAddressKey $AddressKey
     */
    protected $AddressKey = null;

    /**
     * @var string $AuditTrailCode
     */
    protected $AuditTrailCode = null;

    /**
     * @var BatchKey $BatchKey
     */
    protected $BatchKey = null;

    /**
     * @var CustomerKey $CorporateAccountKey
     */
    protected $CorporateAccountKey = null;

    /**
     * @var MoneyAmount $CostAmount
     */
    protected $CostAmount = null;

    /**
     * @var CurrencyKey $CurrencyKey
     */
    protected $CurrencyKey = null;

    /**
     * @var MoneyAmount $CurrentDocumentAmount
     */
    protected $CurrentDocumentAmount = null;

    /**
     * @var CustomerKey $CustomerKey
     */
    protected $CustomerKey = null;

    /**
     * @var string $CustomerName
     */
    protected $CustomerName = null;

    /**
     * @var string $CustomerPONumber
     */
    protected $CustomerPONumber = null;

    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var ArrayOfReceivablesDistribution $Distributions
     */
    protected $Distributions = null;

    /**
     * @var MoneyAmount $DocumentAmount
     */
    protected $DocumentAmount = null;

    /**
     * @var \DateTime $ExchangeDate
     */
    protected $ExchangeDate = null;

    /**
     * @var float $ExchangeRate
     */
    protected $ExchangeRate = null;

    /**
     * @var MoneyAmount $FreightAmount
     */
    protected $FreightAmount = null;

    /**
     * @var TaxScheduleKey $FreightTaxScheduleKey
     */
    protected $FreightTaxScheduleKey = null;

    /**
     * @var \DateTime $GeneralLedgerPostingDate
     */
    protected $GeneralLedgerPostingDate = null;

    /**
     * @var \DateTime $InvoicePaidOffDate
     */
    protected $InvoicePaidOffDate = null;

    /**
     * @var boolean $IsDeleted
     */
    protected $IsDeleted = null;

    /**
     * @var boolean $IsDirectDebitDocument
     */
    protected $IsDirectDebitDocument = null;

    /**
     * @var boolean $IsElectronic
     */
    protected $IsElectronic = null;

    /**
     * @var boolean $IsIntrastatDocument
     */
    protected $IsIntrastatDocument = null;

    /**
     * @var boolean $IsVoided
     */
    protected $IsVoided = null;

    /**
     * @var ReceivablesDocumentKey $Key
     */
    protected $Key = null;

    /**
     * @var MoneyAmount $MiscellaneousAmount
     */
    protected $MiscellaneousAmount = null;

    /**
     * @var TaxScheduleKey $MiscellaneousTaxScheduleKey
     */
    protected $MiscellaneousTaxScheduleKey = null;

    /**
     * @var string $ModifiedBy
     */
    protected $ModifiedBy = null;

    /**
     * @var \DateTime $ModifiedDate
     */
    protected $ModifiedDate = null;

    /**
     * @var string $PostedBy
     */
    protected $PostedBy = null;

    /**
     * @var \DateTime $PostedDate
     */
    protected $PostedDate = null;

    /**
     * @var MoneyAmount $SalesAmount
     */
    protected $SalesAmount = null;

    /**
     * @var TaxScheduleKey $SalesTaxScheduleKey
     */
    protected $SalesTaxScheduleKey = null;

    /**
     * @var SalesTerritoryKey $SalesTerritoryKey
     */
    protected $SalesTerritoryKey = null;

    /**
     * @var SalespersonKey $SalespersonKey
     */
    protected $SalespersonKey = null;

    /**
     * @var ShippingMethodKey $ShippingMethodKey
     */
    protected $ShippingMethodKey = null;

    /**
     * @var MoneyAmount $TaxAmount
     */
    protected $TaxAmount = null;

    /**
     * @var TaxScheduleKey $TaxScheduleKey
     */
    protected $TaxScheduleKey = null;

    /**
     * @var ArrayOfReceivablesTax $Taxes
     */
    protected $Taxes = null;

    /**
     * @var MoneyAmount $TradeDiscountAmount
     */
    protected $TradeDiscountAmount = null;

    /**
     * @var ReceivablesTransactionState $TransactionState
     */
    protected $TransactionState = null;

    /**
     * @var ReceivablesDocumentType $Type
     */
    protected $Type = null;

    /**
     * @var \DateTime $VoidDate
     */
    protected $VoidDate = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return CustomerAddressKey
     */
    public function getAddressKey()
    {
      return $this->AddressKey;
    }

    /**
     * @param CustomerAddressKey $AddressKey
     * @return ReceivablesDocument
     */
    public function setAddressKey($AddressKey)
    {
      $this->AddressKey = $AddressKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getAuditTrailCode()
    {
      return $this->AuditTrailCode;
    }

    /**
     * @param string $AuditTrailCode
     * @return ReceivablesDocument
     */
    public function setAuditTrailCode($AuditTrailCode)
    {
      $this->AuditTrailCode = $AuditTrailCode;
      return $this;
    }

    /**
     * @return BatchKey
     */
    public function getBatchKey()
    {
      return $this->BatchKey;
    }

    /**
     * @param BatchKey $BatchKey
     * @return ReceivablesDocument
     */
    public function setBatchKey($BatchKey)
    {
      $this->BatchKey = $BatchKey;
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
     * @return ReceivablesDocument
     */
    public function setCorporateAccountKey($CorporateAccountKey)
    {
      $this->CorporateAccountKey = $CorporateAccountKey;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getCostAmount()
    {
      return $this->CostAmount;
    }

    /**
     * @param MoneyAmount $CostAmount
     * @return ReceivablesDocument
     */
    public function setCostAmount($CostAmount)
    {
      $this->CostAmount = $CostAmount;
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
     * @return ReceivablesDocument
     */
    public function setCurrencyKey($CurrencyKey)
    {
      $this->CurrencyKey = $CurrencyKey;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getCurrentDocumentAmount()
    {
      return $this->CurrentDocumentAmount;
    }

    /**
     * @param MoneyAmount $CurrentDocumentAmount
     * @return ReceivablesDocument
     */
    public function setCurrentDocumentAmount($CurrentDocumentAmount)
    {
      $this->CurrentDocumentAmount = $CurrentDocumentAmount;
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
     * @return ReceivablesDocument
     */
    public function setCustomerKey($CustomerKey)
    {
      $this->CustomerKey = $CustomerKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerName()
    {
      return $this->CustomerName;
    }

    /**
     * @param string $CustomerName
     * @return ReceivablesDocument
     */
    public function setCustomerName($CustomerName)
    {
      $this->CustomerName = $CustomerName;
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
     * @return ReceivablesDocument
     */
    public function setCustomerPONumber($CustomerPONumber)
    {
      $this->CustomerPONumber = $CustomerPONumber;
      return $this;
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
     * @return ReceivablesDocument
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
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return ReceivablesDocument
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return ArrayOfReceivablesDistribution
     */
    public function getDistributions()
    {
      return $this->Distributions;
    }

    /**
     * @param ArrayOfReceivablesDistribution $Distributions
     * @return ReceivablesDocument
     */
    public function setDistributions($Distributions)
    {
      $this->Distributions = $Distributions;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getDocumentAmount()
    {
      return $this->DocumentAmount;
    }

    /**
     * @param MoneyAmount $DocumentAmount
     * @return ReceivablesDocument
     */
    public function setDocumentAmount($DocumentAmount)
    {
      $this->DocumentAmount = $DocumentAmount;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExchangeDate()
    {
      if ($this->ExchangeDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ExchangeDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ExchangeDate
     * @return ReceivablesDocument
     */
    public function setExchangeDate(\DateTime $ExchangeDate = null)
    {
      if ($ExchangeDate == null) {
       $this->ExchangeDate = null;
      } else {
        $this->ExchangeDate = $ExchangeDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return float
     */
    public function getExchangeRate()
    {
      return $this->ExchangeRate;
    }

    /**
     * @param float $ExchangeRate
     * @return ReceivablesDocument
     */
    public function setExchangeRate($ExchangeRate)
    {
      $this->ExchangeRate = $ExchangeRate;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getFreightAmount()
    {
      return $this->FreightAmount;
    }

    /**
     * @param MoneyAmount $FreightAmount
     * @return ReceivablesDocument
     */
    public function setFreightAmount($FreightAmount)
    {
      $this->FreightAmount = $FreightAmount;
      return $this;
    }

    /**
     * @return TaxScheduleKey
     */
    public function getFreightTaxScheduleKey()
    {
      return $this->FreightTaxScheduleKey;
    }

    /**
     * @param TaxScheduleKey $FreightTaxScheduleKey
     * @return ReceivablesDocument
     */
    public function setFreightTaxScheduleKey($FreightTaxScheduleKey)
    {
      $this->FreightTaxScheduleKey = $FreightTaxScheduleKey;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getGeneralLedgerPostingDate()
    {
      if ($this->GeneralLedgerPostingDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->GeneralLedgerPostingDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $GeneralLedgerPostingDate
     * @return ReceivablesDocument
     */
    public function setGeneralLedgerPostingDate(\DateTime $GeneralLedgerPostingDate = null)
    {
      if ($GeneralLedgerPostingDate == null) {
       $this->GeneralLedgerPostingDate = null;
      } else {
        $this->GeneralLedgerPostingDate = $GeneralLedgerPostingDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getInvoicePaidOffDate()
    {
      if ($this->InvoicePaidOffDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->InvoicePaidOffDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $InvoicePaidOffDate
     * @return ReceivablesDocument
     */
    public function setInvoicePaidOffDate(\DateTime $InvoicePaidOffDate = null)
    {
      if ($InvoicePaidOffDate == null) {
       $this->InvoicePaidOffDate = null;
      } else {
        $this->InvoicePaidOffDate = $InvoicePaidOffDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDeleted()
    {
      return $this->IsDeleted;
    }

    /**
     * @param boolean $IsDeleted
     * @return ReceivablesDocument
     */
    public function setIsDeleted($IsDeleted)
    {
      $this->IsDeleted = $IsDeleted;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDirectDebitDocument()
    {
      return $this->IsDirectDebitDocument;
    }

    /**
     * @param boolean $IsDirectDebitDocument
     * @return ReceivablesDocument
     */
    public function setIsDirectDebitDocument($IsDirectDebitDocument)
    {
      $this->IsDirectDebitDocument = $IsDirectDebitDocument;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsElectronic()
    {
      return $this->IsElectronic;
    }

    /**
     * @param boolean $IsElectronic
     * @return ReceivablesDocument
     */
    public function setIsElectronic($IsElectronic)
    {
      $this->IsElectronic = $IsElectronic;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsIntrastatDocument()
    {
      return $this->IsIntrastatDocument;
    }

    /**
     * @param boolean $IsIntrastatDocument
     * @return ReceivablesDocument
     */
    public function setIsIntrastatDocument($IsIntrastatDocument)
    {
      $this->IsIntrastatDocument = $IsIntrastatDocument;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsVoided()
    {
      return $this->IsVoided;
    }

    /**
     * @param boolean $IsVoided
     * @return ReceivablesDocument
     */
    public function setIsVoided($IsVoided)
    {
      $this->IsVoided = $IsVoided;
      return $this;
    }

    /**
     * @return ReceivablesDocumentKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param ReceivablesDocumentKey $Key
     * @return ReceivablesDocument
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getMiscellaneousAmount()
    {
      return $this->MiscellaneousAmount;
    }

    /**
     * @param MoneyAmount $MiscellaneousAmount
     * @return ReceivablesDocument
     */
    public function setMiscellaneousAmount($MiscellaneousAmount)
    {
      $this->MiscellaneousAmount = $MiscellaneousAmount;
      return $this;
    }

    /**
     * @return TaxScheduleKey
     */
    public function getMiscellaneousTaxScheduleKey()
    {
      return $this->MiscellaneousTaxScheduleKey;
    }

    /**
     * @param TaxScheduleKey $MiscellaneousTaxScheduleKey
     * @return ReceivablesDocument
     */
    public function setMiscellaneousTaxScheduleKey($MiscellaneousTaxScheduleKey)
    {
      $this->MiscellaneousTaxScheduleKey = $MiscellaneousTaxScheduleKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getModifiedBy()
    {
      return $this->ModifiedBy;
    }

    /**
     * @param string $ModifiedBy
     * @return ReceivablesDocument
     */
    public function setModifiedBy($ModifiedBy)
    {
      $this->ModifiedBy = $ModifiedBy;
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
     * @return ReceivablesDocument
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
    public function getPostedBy()
    {
      return $this->PostedBy;
    }

    /**
     * @param string $PostedBy
     * @return ReceivablesDocument
     */
    public function setPostedBy($PostedBy)
    {
      $this->PostedBy = $PostedBy;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPostedDate()
    {
      if ($this->PostedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->PostedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $PostedDate
     * @return ReceivablesDocument
     */
    public function setPostedDate(\DateTime $PostedDate = null)
    {
      if ($PostedDate == null) {
       $this->PostedDate = null;
      } else {
        $this->PostedDate = $PostedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getSalesAmount()
    {
      return $this->SalesAmount;
    }

    /**
     * @param MoneyAmount $SalesAmount
     * @return ReceivablesDocument
     */
    public function setSalesAmount($SalesAmount)
    {
      $this->SalesAmount = $SalesAmount;
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
     * @return ReceivablesDocument
     */
    public function setSalesTaxScheduleKey($SalesTaxScheduleKey)
    {
      $this->SalesTaxScheduleKey = $SalesTaxScheduleKey;
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
     * @return ReceivablesDocument
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
     * @return ReceivablesDocument
     */
    public function setSalespersonKey($SalespersonKey)
    {
      $this->SalespersonKey = $SalespersonKey;
      return $this;
    }

    /**
     * @return ShippingMethodKey
     */
    public function getShippingMethodKey()
    {
      return $this->ShippingMethodKey;
    }

    /**
     * @param ShippingMethodKey $ShippingMethodKey
     * @return ReceivablesDocument
     */
    public function setShippingMethodKey($ShippingMethodKey)
    {
      $this->ShippingMethodKey = $ShippingMethodKey;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getTaxAmount()
    {
      return $this->TaxAmount;
    }

    /**
     * @param MoneyAmount $TaxAmount
     * @return ReceivablesDocument
     */
    public function setTaxAmount($TaxAmount)
    {
      $this->TaxAmount = $TaxAmount;
      return $this;
    }

    /**
     * @return TaxScheduleKey
     */
    public function getTaxScheduleKey()
    {
      return $this->TaxScheduleKey;
    }

    /**
     * @param TaxScheduleKey $TaxScheduleKey
     * @return ReceivablesDocument
     */
    public function setTaxScheduleKey($TaxScheduleKey)
    {
      $this->TaxScheduleKey = $TaxScheduleKey;
      return $this;
    }

    /**
     * @return ArrayOfReceivablesTax
     */
    public function getTaxes()
    {
      return $this->Taxes;
    }

    /**
     * @param ArrayOfReceivablesTax $Taxes
     * @return ReceivablesDocument
     */
    public function setTaxes($Taxes)
    {
      $this->Taxes = $Taxes;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getTradeDiscountAmount()
    {
      return $this->TradeDiscountAmount;
    }

    /**
     * @param MoneyAmount $TradeDiscountAmount
     * @return ReceivablesDocument
     */
    public function setTradeDiscountAmount($TradeDiscountAmount)
    {
      $this->TradeDiscountAmount = $TradeDiscountAmount;
      return $this;
    }

    /**
     * @return ReceivablesTransactionState
     */
    public function getTransactionState()
    {
      return $this->TransactionState;
    }

    /**
     * @param ReceivablesTransactionState $TransactionState
     * @return ReceivablesDocument
     */
    public function setTransactionState($TransactionState)
    {
      $this->TransactionState = $TransactionState;
      return $this;
    }

    /**
     * @return ReceivablesDocumentType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param ReceivablesDocumentType $Type
     * @return ReceivablesDocument
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getVoidDate()
    {
      if ($this->VoidDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->VoidDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $VoidDate
     * @return ReceivablesDocument
     */
    public function setVoidDate(\DateTime $VoidDate = null)
    {
      if ($VoidDate == null) {
       $this->VoidDate = null;
      } else {
        $this->VoidDate = $VoidDate->format(\DateTime::ATOM);
      }
      return $this;
    }

}
