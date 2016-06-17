<?php

class PayablesDocument extends BusinessObject
{

    /**
     * @var AddressKey $AddressKey
     */
    protected $AddressKey = null;

    /**
     * @var MoneyAmount $Amount1099
     */
    protected $Amount1099 = null;

    /**
     * @var string $AuditTrailCode
     */
    protected $AuditTrailCode = null;

    /**
     * @var BatchKey $BatchKey
     */
    protected $BatchKey = null;

    /**
     * @var MoneyAmount $ChargeAmount
     */
    protected $ChargeAmount = null;

    /**
     * @var CurrencyKey $CurrencyKey
     */
    protected $CurrencyKey = null;

    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var ArrayOfPayablesDistribution $Distributions
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
     * @var boolean $HasIntercompanyDistributions
     */
    protected $HasIntercompanyDistributions = null;

    /**
     * @var boolean $IsIntercompanyTransaction
     */
    protected $IsIntercompanyTransaction = null;

    /**
     * @var boolean $IsVoided
     */
    protected $IsVoided = null;

    /**
     * @var PayablesDocumentKey $Key
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
     * @var string $PONumber
     */
    protected $PONumber = null;

    /**
     * @var string $PostedBy
     */
    protected $PostedBy = null;

    /**
     * @var \DateTime $PostedDate
     */
    protected $PostedDate = null;

    /**
     * @var TaxScheduleKey $PurchaseTaxScheduleKey
     */
    protected $PurchaseTaxScheduleKey = null;

    /**
     * @var MoneyAmount $PurchasesAmount
     */
    protected $PurchasesAmount = null;

    /**
     * @var AddressKey $RemitToAddressKey
     */
    protected $RemitToAddressKey = null;

    /**
     * @var ShippingMethodKey $ShippingMethodKey
     */
    protected $ShippingMethodKey = null;

    /**
     * @var MoneyAmount $TaxAmount
     */
    protected $TaxAmount = null;

    /**
     * @var \DateTime $TaxDate
     */
    protected $TaxDate = null;

    /**
     * @var TaxScheduleKey $TaxScheduleKey
     */
    protected $TaxScheduleKey = null;

    /**
     * @var ArrayOfPayablesTax $Taxes
     */
    protected $Taxes = null;

    /**
     * @var MoneyAmount $TradeDiscountAmount
     */
    protected $TradeDiscountAmount = null;

    /**
     * @var PayablesTransactionState $TransactionState
     */
    protected $TransactionState = null;

    /**
     * @var PayablesDocumentType $Type
     */
    protected $Type = null;

    /**
     * @var string $VendorDocumentNumber
     */
    protected $VendorDocumentNumber = null;

    /**
     * @var VendorKey $VendorKey
     */
    protected $VendorKey = null;

    /**
     * @var string $VendorName
     */
    protected $VendorName = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return PayablesDocument
     */
    public function setAddressKey($AddressKey)
    {
      $this->AddressKey = $AddressKey;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getAmount1099()
    {
      return $this->Amount1099;
    }

    /**
     * @param MoneyAmount $Amount1099
     * @return PayablesDocument
     */
    public function setAmount1099($Amount1099)
    {
      $this->Amount1099 = $Amount1099;
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
     * @return PayablesDocument
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
     * @return PayablesDocument
     */
    public function setBatchKey($BatchKey)
    {
      $this->BatchKey = $BatchKey;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getChargeAmount()
    {
      return $this->ChargeAmount;
    }

    /**
     * @param MoneyAmount $ChargeAmount
     * @return PayablesDocument
     */
    public function setChargeAmount($ChargeAmount)
    {
      $this->ChargeAmount = $ChargeAmount;
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
     * @return PayablesDocument
     */
    public function setCurrencyKey($CurrencyKey)
    {
      $this->CurrencyKey = $CurrencyKey;
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
     * @return PayablesDocument
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
     * @return PayablesDocument
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return ArrayOfPayablesDistribution
     */
    public function getDistributions()
    {
      return $this->Distributions;
    }

    /**
     * @param ArrayOfPayablesDistribution $Distributions
     * @return PayablesDocument
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
     * @return PayablesDocument
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
     * @return PayablesDocument
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
     * @return PayablesDocument
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
     * @return PayablesDocument
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
     * @return PayablesDocument
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
     * @return PayablesDocument
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
     * @return boolean
     */
    public function getHasIntercompanyDistributions()
    {
      return $this->HasIntercompanyDistributions;
    }

    /**
     * @param boolean $HasIntercompanyDistributions
     * @return PayablesDocument
     */
    public function setHasIntercompanyDistributions($HasIntercompanyDistributions)
    {
      $this->HasIntercompanyDistributions = $HasIntercompanyDistributions;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsIntercompanyTransaction()
    {
      return $this->IsIntercompanyTransaction;
    }

    /**
     * @param boolean $IsIntercompanyTransaction
     * @return PayablesDocument
     */
    public function setIsIntercompanyTransaction($IsIntercompanyTransaction)
    {
      $this->IsIntercompanyTransaction = $IsIntercompanyTransaction;
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
     * @return PayablesDocument
     */
    public function setIsVoided($IsVoided)
    {
      $this->IsVoided = $IsVoided;
      return $this;
    }

    /**
     * @return PayablesDocumentKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param PayablesDocumentKey $Key
     * @return PayablesDocument
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
     * @return PayablesDocument
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
     * @return PayablesDocument
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
     * @return PayablesDocument
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
     * @return PayablesDocument
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
    public function getPONumber()
    {
      return $this->PONumber;
    }

    /**
     * @param string $PONumber
     * @return PayablesDocument
     */
    public function setPONumber($PONumber)
    {
      $this->PONumber = $PONumber;
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
     * @return PayablesDocument
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
     * @return PayablesDocument
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
     * @return TaxScheduleKey
     */
    public function getPurchaseTaxScheduleKey()
    {
      return $this->PurchaseTaxScheduleKey;
    }

    /**
     * @param TaxScheduleKey $PurchaseTaxScheduleKey
     * @return PayablesDocument
     */
    public function setPurchaseTaxScheduleKey($PurchaseTaxScheduleKey)
    {
      $this->PurchaseTaxScheduleKey = $PurchaseTaxScheduleKey;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getPurchasesAmount()
    {
      return $this->PurchasesAmount;
    }

    /**
     * @param MoneyAmount $PurchasesAmount
     * @return PayablesDocument
     */
    public function setPurchasesAmount($PurchasesAmount)
    {
      $this->PurchasesAmount = $PurchasesAmount;
      return $this;
    }

    /**
     * @return AddressKey
     */
    public function getRemitToAddressKey()
    {
      return $this->RemitToAddressKey;
    }

    /**
     * @param AddressKey $RemitToAddressKey
     * @return PayablesDocument
     */
    public function setRemitToAddressKey($RemitToAddressKey)
    {
      $this->RemitToAddressKey = $RemitToAddressKey;
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
     * @return PayablesDocument
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
     * @return PayablesDocument
     */
    public function setTaxAmount($TaxAmount)
    {
      $this->TaxAmount = $TaxAmount;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTaxDate()
    {
      if ($this->TaxDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->TaxDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $TaxDate
     * @return PayablesDocument
     */
    public function setTaxDate(\DateTime $TaxDate = null)
    {
      if ($TaxDate == null) {
       $this->TaxDate = null;
      } else {
        $this->TaxDate = $TaxDate->format(\DateTime::ATOM);
      }
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
     * @return PayablesDocument
     */
    public function setTaxScheduleKey($TaxScheduleKey)
    {
      $this->TaxScheduleKey = $TaxScheduleKey;
      return $this;
    }

    /**
     * @return ArrayOfPayablesTax
     */
    public function getTaxes()
    {
      return $this->Taxes;
    }

    /**
     * @param ArrayOfPayablesTax $Taxes
     * @return PayablesDocument
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
     * @return PayablesDocument
     */
    public function setTradeDiscountAmount($TradeDiscountAmount)
    {
      $this->TradeDiscountAmount = $TradeDiscountAmount;
      return $this;
    }

    /**
     * @return PayablesTransactionState
     */
    public function getTransactionState()
    {
      return $this->TransactionState;
    }

    /**
     * @param PayablesTransactionState $TransactionState
     * @return PayablesDocument
     */
    public function setTransactionState($TransactionState)
    {
      $this->TransactionState = $TransactionState;
      return $this;
    }

    /**
     * @return PayablesDocumentType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param PayablesDocumentType $Type
     * @return PayablesDocument
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return string
     */
    public function getVendorDocumentNumber()
    {
      return $this->VendorDocumentNumber;
    }

    /**
     * @param string $VendorDocumentNumber
     * @return PayablesDocument
     */
    public function setVendorDocumentNumber($VendorDocumentNumber)
    {
      $this->VendorDocumentNumber = $VendorDocumentNumber;
      return $this;
    }

    /**
     * @return VendorKey
     */
    public function getVendorKey()
    {
      return $this->VendorKey;
    }

    /**
     * @param VendorKey $VendorKey
     * @return PayablesDocument
     */
    public function setVendorKey($VendorKey)
    {
      $this->VendorKey = $VendorKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getVendorName()
    {
      return $this->VendorName;
    }

    /**
     * @param string $VendorName
     * @return PayablesDocument
     */
    public function setVendorName($VendorName)
    {
      $this->VendorName = $VendorName;
      return $this;
    }

}
