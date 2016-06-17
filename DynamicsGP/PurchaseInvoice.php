<?php

class PurchaseInvoice extends BusinessObject
{

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
     * @var string $CreatedBy
     */
    protected $CreatedBy = null;

    /**
     * @var \DateTime $CreatedDate
     */
    protected $CreatedDate = null;

    /**
     * @var CurrencyKey $CurrencyKey
     */
    protected $CurrencyKey = null;

    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

    /**
     * @var ArrayOfPurchaseDistribution $Distributions
     */
    protected $Distributions = null;

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
     * @var MoneyAmount $FreightTaxAmount
     */
    protected $FreightTaxAmount = null;

    /**
     * @var PurchasingTaxBasis $FreightTaxBasis
     */
    protected $FreightTaxBasis = null;

    /**
     * @var TaxScheduleKey $FreightTaxScheduleKey
     */
    protected $FreightTaxScheduleKey = null;

    /**
     * @var ArrayOfPurchaseInvoiceTax $FreightTaxes
     */
    protected $FreightTaxes = null;

    /**
     * @var \DateTime $GeneralLedgerPostingDate
     */
    protected $GeneralLedgerPostingDate = null;

    /**
     * @var PurchaseTransactionKey $Key
     */
    protected $Key = null;

    /**
     * @var ArrayOfPurchaseInvoiceLine $Lines
     */
    protected $Lines = null;

    /**
     * @var MoneyAmount $MiscellaneousAmount
     */
    protected $MiscellaneousAmount = null;

    /**
     * @var MoneyAmount $MiscellaneousTaxAmount
     */
    protected $MiscellaneousTaxAmount = null;

    /**
     * @var PurchasingTaxBasis $MiscellaneousTaxBasis
     */
    protected $MiscellaneousTaxBasis = null;

    /**
     * @var TaxScheduleKey $MiscellaneousTaxScheduleKey
     */
    protected $MiscellaneousTaxScheduleKey = null;

    /**
     * @var ArrayOfPurchaseInvoiceTax $MiscellaneousTaxes
     */
    protected $MiscellaneousTaxes = null;

    /**
     * @var \DateTime $ModifiedDate
     */
    protected $ModifiedDate = null;

    /**
     * @var PaymentTermsKey $PaymentTermsKey
     */
    protected $PaymentTermsKey = null;

    /**
     * @var string $PostedBy
     */
    protected $PostedBy = null;

    /**
     * @var \DateTime $PostedDate
     */
    protected $PostedDate = null;

    /**
     * @var string $Reference
     */
    protected $Reference = null;

    /**
     * @var AddressKey $RemitToAddressKey
     */
    protected $RemitToAddressKey = null;

    /**
     * @var MoneyAmount $Subtotal
     */
    protected $Subtotal = null;

    /**
     * @var MoneyAmount $TaxAmount
     */
    protected $TaxAmount = null;

    /**
     * @var TaxScheduleKey $TaxScheduleKey
     */
    protected $TaxScheduleKey = null;

    /**
     * @var ArrayOfPurchaseInvoiceTax $Taxes
     */
    protected $Taxes = null;

    /**
     * @var Terms $Terms
     */
    protected $Terms = null;

    /**
     * @var MoneyAmount $TradeDiscountAmount
     */
    protected $TradeDiscountAmount = null;

    /**
     * @var PurchaseTransactionState $TransactionState
     */
    protected $TransactionState = null;

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

    /**
     * @var string $VoucherNumber
     */
    protected $VoucherNumber = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return PurchaseInvoice
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
     * @return PurchaseInvoice
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
     * @return PurchaseInvoice
     */
    public function setBatchKey($BatchKey)
    {
      $this->BatchKey = $BatchKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreatedBy()
    {
      return $this->CreatedBy;
    }

    /**
     * @param string $CreatedBy
     * @return PurchaseInvoice
     */
    public function setCreatedBy($CreatedBy)
    {
      $this->CreatedBy = $CreatedBy;
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
     * @return PurchaseInvoice
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
     * @return CurrencyKey
     */
    public function getCurrencyKey()
    {
      return $this->CurrencyKey;
    }

    /**
     * @param CurrencyKey $CurrencyKey
     * @return PurchaseInvoice
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
     * @return PurchaseInvoice
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
     * @return ArrayOfPurchaseDistribution
     */
    public function getDistributions()
    {
      return $this->Distributions;
    }

    /**
     * @param ArrayOfPurchaseDistribution $Distributions
     * @return PurchaseInvoice
     */
    public function setDistributions($Distributions)
    {
      $this->Distributions = $Distributions;
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
     * @return PurchaseInvoice
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
     * @return PurchaseInvoice
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
     * @return PurchaseInvoice
     */
    public function setFreightAmount($FreightAmount)
    {
      $this->FreightAmount = $FreightAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getFreightTaxAmount()
    {
      return $this->FreightTaxAmount;
    }

    /**
     * @param MoneyAmount $FreightTaxAmount
     * @return PurchaseInvoice
     */
    public function setFreightTaxAmount($FreightTaxAmount)
    {
      $this->FreightTaxAmount = $FreightTaxAmount;
      return $this;
    }

    /**
     * @return PurchasingTaxBasis
     */
    public function getFreightTaxBasis()
    {
      return $this->FreightTaxBasis;
    }

    /**
     * @param PurchasingTaxBasis $FreightTaxBasis
     * @return PurchaseInvoice
     */
    public function setFreightTaxBasis($FreightTaxBasis)
    {
      $this->FreightTaxBasis = $FreightTaxBasis;
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
     * @return PurchaseInvoice
     */
    public function setFreightTaxScheduleKey($FreightTaxScheduleKey)
    {
      $this->FreightTaxScheduleKey = $FreightTaxScheduleKey;
      return $this;
    }

    /**
     * @return ArrayOfPurchaseInvoiceTax
     */
    public function getFreightTaxes()
    {
      return $this->FreightTaxes;
    }

    /**
     * @param ArrayOfPurchaseInvoiceTax $FreightTaxes
     * @return PurchaseInvoice
     */
    public function setFreightTaxes($FreightTaxes)
    {
      $this->FreightTaxes = $FreightTaxes;
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
     * @return PurchaseInvoice
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
     * @return PurchaseTransactionKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param PurchaseTransactionKey $Key
     * @return PurchaseInvoice
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return ArrayOfPurchaseInvoiceLine
     */
    public function getLines()
    {
      return $this->Lines;
    }

    /**
     * @param ArrayOfPurchaseInvoiceLine $Lines
     * @return PurchaseInvoice
     */
    public function setLines($Lines)
    {
      $this->Lines = $Lines;
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
     * @return PurchaseInvoice
     */
    public function setMiscellaneousAmount($MiscellaneousAmount)
    {
      $this->MiscellaneousAmount = $MiscellaneousAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getMiscellaneousTaxAmount()
    {
      return $this->MiscellaneousTaxAmount;
    }

    /**
     * @param MoneyAmount $MiscellaneousTaxAmount
     * @return PurchaseInvoice
     */
    public function setMiscellaneousTaxAmount($MiscellaneousTaxAmount)
    {
      $this->MiscellaneousTaxAmount = $MiscellaneousTaxAmount;
      return $this;
    }

    /**
     * @return PurchasingTaxBasis
     */
    public function getMiscellaneousTaxBasis()
    {
      return $this->MiscellaneousTaxBasis;
    }

    /**
     * @param PurchasingTaxBasis $MiscellaneousTaxBasis
     * @return PurchaseInvoice
     */
    public function setMiscellaneousTaxBasis($MiscellaneousTaxBasis)
    {
      $this->MiscellaneousTaxBasis = $MiscellaneousTaxBasis;
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
     * @return PurchaseInvoice
     */
    public function setMiscellaneousTaxScheduleKey($MiscellaneousTaxScheduleKey)
    {
      $this->MiscellaneousTaxScheduleKey = $MiscellaneousTaxScheduleKey;
      return $this;
    }

    /**
     * @return ArrayOfPurchaseInvoiceTax
     */
    public function getMiscellaneousTaxes()
    {
      return $this->MiscellaneousTaxes;
    }

    /**
     * @param ArrayOfPurchaseInvoiceTax $MiscellaneousTaxes
     * @return PurchaseInvoice
     */
    public function setMiscellaneousTaxes($MiscellaneousTaxes)
    {
      $this->MiscellaneousTaxes = $MiscellaneousTaxes;
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
     * @return PurchaseInvoice
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
     * @return PaymentTermsKey
     */
    public function getPaymentTermsKey()
    {
      return $this->PaymentTermsKey;
    }

    /**
     * @param PaymentTermsKey $PaymentTermsKey
     * @return PurchaseInvoice
     */
    public function setPaymentTermsKey($PaymentTermsKey)
    {
      $this->PaymentTermsKey = $PaymentTermsKey;
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
     * @return PurchaseInvoice
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
     * @return PurchaseInvoice
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
     * @return string
     */
    public function getReference()
    {
      return $this->Reference;
    }

    /**
     * @param string $Reference
     * @return PurchaseInvoice
     */
    public function setReference($Reference)
    {
      $this->Reference = $Reference;
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
     * @return PurchaseInvoice
     */
    public function setRemitToAddressKey($RemitToAddressKey)
    {
      $this->RemitToAddressKey = $RemitToAddressKey;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getSubtotal()
    {
      return $this->Subtotal;
    }

    /**
     * @param MoneyAmount $Subtotal
     * @return PurchaseInvoice
     */
    public function setSubtotal($Subtotal)
    {
      $this->Subtotal = $Subtotal;
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
     * @return PurchaseInvoice
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
     * @return PurchaseInvoice
     */
    public function setTaxScheduleKey($TaxScheduleKey)
    {
      $this->TaxScheduleKey = $TaxScheduleKey;
      return $this;
    }

    /**
     * @return ArrayOfPurchaseInvoiceTax
     */
    public function getTaxes()
    {
      return $this->Taxes;
    }

    /**
     * @param ArrayOfPurchaseInvoiceTax $Taxes
     * @return PurchaseInvoice
     */
    public function setTaxes($Taxes)
    {
      $this->Taxes = $Taxes;
      return $this;
    }

    /**
     * @return Terms
     */
    public function getTerms()
    {
      return $this->Terms;
    }

    /**
     * @param Terms $Terms
     * @return PurchaseInvoice
     */
    public function setTerms($Terms)
    {
      $this->Terms = $Terms;
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
     * @return PurchaseInvoice
     */
    public function setTradeDiscountAmount($TradeDiscountAmount)
    {
      $this->TradeDiscountAmount = $TradeDiscountAmount;
      return $this;
    }

    /**
     * @return PurchaseTransactionState
     */
    public function getTransactionState()
    {
      return $this->TransactionState;
    }

    /**
     * @param PurchaseTransactionState $TransactionState
     * @return PurchaseInvoice
     */
    public function setTransactionState($TransactionState)
    {
      $this->TransactionState = $TransactionState;
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
     * @return PurchaseInvoice
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
     * @return PurchaseInvoice
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
     * @return PurchaseInvoice
     */
    public function setVendorName($VendorName)
    {
      $this->VendorName = $VendorName;
      return $this;
    }

    /**
     * @return string
     */
    public function getVoucherNumber()
    {
      return $this->VoucherNumber;
    }

    /**
     * @param string $VoucherNumber
     * @return PurchaseInvoice
     */
    public function setVoucherNumber($VoucherNumber)
    {
      $this->VoucherNumber = $VoucherNumber;
      return $this;
    }

}
