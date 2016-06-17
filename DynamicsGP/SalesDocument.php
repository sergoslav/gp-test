<?php

class SalesDocument extends BusinessObject
{

    /**
     * @var \DateTime $ActualShipDate
     */
    protected $ActualShipDate = null;

    /**
     * @var string $AuditTrailCode
     */
    protected $AuditTrailCode = null;

    /**
     * @var \DateTime $BackorderDate
     */
    protected $BackorderDate = null;

    /**
     * @var BatchKey $BatchKey
     */
    protected $BatchKey = null;

    /**
     * @var CustomerAddressKey $BillToAddressKey
     */
    protected $BillToAddressKey = null;

    /**
     * @var string $Comment
     */
    protected $Comment = null;

    /**
     * @var CommentKey $CommentKey
     */
    protected $CommentKey = null;

    /**
     * @var MoneyAmount $CommissionAmount
     */
    protected $CommissionAmount = null;

    /**
     * @var CommissionBasedOn $CommissionBasedOn
     */
    protected $CommissionBasedOn = null;

    /**
     * @var MoneyAmount $CommissionSaleAmount
     */
    protected $CommissionSaleAmount = null;

    /**
     * @var ArrayOfSalesCommission $Commissions
     */
    protected $Commissions = null;

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
     * @var MoneyAmount $DiscountAmount
     */
    protected $DiscountAmount = null;

    /**
     * @var SalesDocumentTypeKey $DocumentTypeKey
     */
    protected $DocumentTypeKey = null;

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
     * @var SalesTaxBasis $FreightTaxBasis
     */
    protected $FreightTaxBasis = null;

    /**
     * @var TaxScheduleKey $FreightTaxScheduleKey
     */
    protected $FreightTaxScheduleKey = null;

    /**
     * @var ArrayOfSalesDocumentTax $FreightTaxes
     */
    protected $FreightTaxes = null;

    /**
     * @var string $FrontOfficeIntegrationId
     */
    protected $FrontOfficeIntegrationId = null;

    /**
     * @var \DateTime $FulfillDate
     */
    protected $FulfillDate = null;

    /**
     * @var string $IntegrationId
     */
    protected $IntegrationId = null;

    /**
     * @var int $IntegrationSource
     */
    protected $IntegrationSource = null;

    /**
     * @var \DateTime $InvoiceDate
     */
    protected $InvoiceDate = null;

    /**
     * @var boolean $IsIntrastatDocument
     */
    protected $IsIntrastatDocument = null;

    /**
     * @var boolean $IsVoided
     */
    protected $IsVoided = null;

    /**
     * @var SalesDocumentKey $Key
     */
    protected $Key = null;

    /**
     * @var \DateTime $LastModifiedDate
     */
    protected $LastModifiedDate = null;

    /**
     * @var MoneyAmount $LineTotalAmount
     */
    protected $LineTotalAmount = null;

    /**
     * @var int $MasterNumber
     */
    protected $MasterNumber = null;

    /**
     * @var MoneyAmount $MiscellaneousAmount
     */
    protected $MiscellaneousAmount = null;

    /**
     * @var MoneyAmount $MiscellaneousTaxAmount
     */
    protected $MiscellaneousTaxAmount = null;

    /**
     * @var SalesTaxBasis $MiscellaneousTaxBasis
     */
    protected $MiscellaneousTaxBasis = null;

    /**
     * @var TaxScheduleKey $MiscellaneousTaxScheduleKey
     */
    protected $MiscellaneousTaxScheduleKey = null;

    /**
     * @var ArrayOfSalesDocumentTax $MiscellaneousTaxes
     */
    protected $MiscellaneousTaxes = null;

    /**
     * @var \DateTime $ModifiedDate
     */
    protected $ModifiedDate = null;

    /**
     * @var string $Note
     */
    protected $Note = null;

    /**
     * @var SalesDocumentKey $OriginalSalesDocumentKey
     */
    protected $OriginalSalesDocumentKey = null;

    /**
     * @var string $OriginalSalesDocumentType
     */
    protected $OriginalSalesDocumentType = null;

    /**
     * @var PaymentTermsKey $PaymentTermsKey
     */
    protected $PaymentTermsKey = null;

    /**
     * @var PriceLevelKey $PriceLevelKey
     */
    protected $PriceLevelKey = null;

    /**
     * @var ArrayOfSalesProcessHold $ProcessHolds
     */
    protected $ProcessHolds = null;

    /**
     * @var \DateTime $QuoteDate
     */
    protected $QuoteDate = null;

    /**
     * @var string $Reference
     */
    protected $Reference = null;

    /**
     * @var \DateTime $RequestedShipDate
     */
    protected $RequestedShipDate = null;

    /**
     * @var \DateTime $ReturnDate
     */
    protected $ReturnDate = null;

    /**
     * @var SalesTerritoryKey $SalesTerritoryKey
     */
    protected $SalesTerritoryKey = null;

    /**
     * @var SalespersonKey $SalespersonKey
     */
    protected $SalespersonKey = null;

    /**
     * @var boolean $ShipCompleteOnly
     */
    protected $ShipCompleteOnly = null;

    /**
     * @var BusinessAddress $ShipToAddress
     */
    protected $ShipToAddress = null;

    /**
     * @var CustomerAddressKey $ShipToAddressKey
     */
    protected $ShipToAddressKey = null;

    /**
     * @var ShippingMethodKey $ShippingMethodKey
     */
    protected $ShippingMethodKey = null;

    /**
     * @var MoneyAmount $TaxAmount
     */
    protected $TaxAmount = null;

    /**
     * @var string $TaxExemptNumber1
     */
    protected $TaxExemptNumber1 = null;

    /**
     * @var string $TaxExemptNumber2
     */
    protected $TaxExemptNumber2 = null;

    /**
     * @var string $TaxRegistrationNumber
     */
    protected $TaxRegistrationNumber = null;

    /**
     * @var TaxScheduleKey $TaxScheduleKey
     */
    protected $TaxScheduleKey = null;

    /**
     * @var ArrayOfSalesDocumentTax $Taxes
     */
    protected $Taxes = null;

    /**
     * @var MoneyAmount $TotalAmount
     */
    protected $TotalAmount = null;

    /**
     * @var ArrayOfSalesTrackingNumber $TrackingNumbers
     */
    protected $TrackingNumbers = null;

    /**
     * @var MoneyPercentChoice $TradeDiscount
     */
    protected $TradeDiscount = null;

    /**
     * @var SalesTransactionState $TransactionState
     */
    protected $TransactionState = null;

    /**
     * @var SalesDocumentType $Type
     */
    protected $Type = null;

    /**
     * @var string $UPSZone
     */
    protected $UPSZone = null;

    /**
     * @var SalesUserDefined $UserDefined
     */
    protected $UserDefined = null;

    /**
     * @var WarehouseKey $WarehouseKey
     */
    protected $WarehouseKey = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return \DateTime
     */
    public function getActualShipDate()
    {
      if ($this->ActualShipDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ActualShipDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ActualShipDate
     * @return SalesDocument
     */
    public function setActualShipDate(\DateTime $ActualShipDate = null)
    {
      if ($ActualShipDate == null) {
       $this->ActualShipDate = null;
      } else {
        $this->ActualShipDate = $ActualShipDate->format(\DateTime::ATOM);
      }
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
     * @return SalesDocument
     */
    public function setAuditTrailCode($AuditTrailCode)
    {
      $this->AuditTrailCode = $AuditTrailCode;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getBackorderDate()
    {
      if ($this->BackorderDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->BackorderDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $BackorderDate
     * @return SalesDocument
     */
    public function setBackorderDate(\DateTime $BackorderDate = null)
    {
      if ($BackorderDate == null) {
       $this->BackorderDate = null;
      } else {
        $this->BackorderDate = $BackorderDate->format(\DateTime::ATOM);
      }
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
     * @return SalesDocument
     */
    public function setBatchKey($BatchKey)
    {
      $this->BatchKey = $BatchKey;
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
     * @return SalesDocument
     */
    public function setBillToAddressKey($BillToAddressKey)
    {
      $this->BillToAddressKey = $BillToAddressKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getComment()
    {
      return $this->Comment;
    }

    /**
     * @param string $Comment
     * @return SalesDocument
     */
    public function setComment($Comment)
    {
      $this->Comment = $Comment;
      return $this;
    }

    /**
     * @return CommentKey
     */
    public function getCommentKey()
    {
      return $this->CommentKey;
    }

    /**
     * @param CommentKey $CommentKey
     * @return SalesDocument
     */
    public function setCommentKey($CommentKey)
    {
      $this->CommentKey = $CommentKey;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getCommissionAmount()
    {
      return $this->CommissionAmount;
    }

    /**
     * @param MoneyAmount $CommissionAmount
     * @return SalesDocument
     */
    public function setCommissionAmount($CommissionAmount)
    {
      $this->CommissionAmount = $CommissionAmount;
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
     * @return SalesDocument
     */
    public function setCommissionBasedOn($CommissionBasedOn)
    {
      $this->CommissionBasedOn = $CommissionBasedOn;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getCommissionSaleAmount()
    {
      return $this->CommissionSaleAmount;
    }

    /**
     * @param MoneyAmount $CommissionSaleAmount
     * @return SalesDocument
     */
    public function setCommissionSaleAmount($CommissionSaleAmount)
    {
      $this->CommissionSaleAmount = $CommissionSaleAmount;
      return $this;
    }

    /**
     * @return ArrayOfSalesCommission
     */
    public function getCommissions()
    {
      return $this->Commissions;
    }

    /**
     * @param ArrayOfSalesCommission $Commissions
     * @return SalesDocument
     */
    public function setCommissions($Commissions)
    {
      $this->Commissions = $Commissions;
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
     * @return SalesDocument
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
     * @return SalesDocument
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
     * @return SalesDocument
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
     * @return SalesDocument
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
     * @return SalesDocument
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
     * @return SalesDocument
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
     * @return SalesDocument
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
     * @return MoneyAmount
     */
    public function getDiscountAmount()
    {
      return $this->DiscountAmount;
    }

    /**
     * @param MoneyAmount $DiscountAmount
     * @return SalesDocument
     */
    public function setDiscountAmount($DiscountAmount)
    {
      $this->DiscountAmount = $DiscountAmount;
      return $this;
    }

    /**
     * @return SalesDocumentTypeKey
     */
    public function getDocumentTypeKey()
    {
      return $this->DocumentTypeKey;
    }

    /**
     * @param SalesDocumentTypeKey $DocumentTypeKey
     * @return SalesDocument
     */
    public function setDocumentTypeKey($DocumentTypeKey)
    {
      $this->DocumentTypeKey = $DocumentTypeKey;
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
     * @return SalesDocument
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
     * @return SalesDocument
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
     * @return SalesDocument
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
     * @return SalesDocument
     */
    public function setFreightTaxAmount($FreightTaxAmount)
    {
      $this->FreightTaxAmount = $FreightTaxAmount;
      return $this;
    }

    /**
     * @return SalesTaxBasis
     */
    public function getFreightTaxBasis()
    {
      return $this->FreightTaxBasis;
    }

    /**
     * @param SalesTaxBasis $FreightTaxBasis
     * @return SalesDocument
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
     * @return SalesDocument
     */
    public function setFreightTaxScheduleKey($FreightTaxScheduleKey)
    {
      $this->FreightTaxScheduleKey = $FreightTaxScheduleKey;
      return $this;
    }

    /**
     * @return ArrayOfSalesDocumentTax
     */
    public function getFreightTaxes()
    {
      return $this->FreightTaxes;
    }

    /**
     * @param ArrayOfSalesDocumentTax $FreightTaxes
     * @return SalesDocument
     */
    public function setFreightTaxes($FreightTaxes)
    {
      $this->FreightTaxes = $FreightTaxes;
      return $this;
    }

    /**
     * @return string
     */
    public function getFrontOfficeIntegrationId()
    {
      return $this->FrontOfficeIntegrationId;
    }

    /**
     * @param string $FrontOfficeIntegrationId
     * @return SalesDocument
     */
    public function setFrontOfficeIntegrationId($FrontOfficeIntegrationId)
    {
      $this->FrontOfficeIntegrationId = $FrontOfficeIntegrationId;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFulfillDate()
    {
      if ($this->FulfillDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->FulfillDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $FulfillDate
     * @return SalesDocument
     */
    public function setFulfillDate(\DateTime $FulfillDate = null)
    {
      if ($FulfillDate == null) {
       $this->FulfillDate = null;
      } else {
        $this->FulfillDate = $FulfillDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getIntegrationId()
    {
      return $this->IntegrationId;
    }

    /**
     * @param string $IntegrationId
     * @return SalesDocument
     */
    public function setIntegrationId($IntegrationId)
    {
      $this->IntegrationId = $IntegrationId;
      return $this;
    }

    /**
     * @return int
     */
    public function getIntegrationSource()
    {
      return $this->IntegrationSource;
    }

    /**
     * @param int $IntegrationSource
     * @return SalesDocument
     */
    public function setIntegrationSource($IntegrationSource)
    {
      $this->IntegrationSource = $IntegrationSource;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getInvoiceDate()
    {
      if ($this->InvoiceDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->InvoiceDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $InvoiceDate
     * @return SalesDocument
     */
    public function setInvoiceDate(\DateTime $InvoiceDate = null)
    {
      if ($InvoiceDate == null) {
       $this->InvoiceDate = null;
      } else {
        $this->InvoiceDate = $InvoiceDate->format(\DateTime::ATOM);
      }
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
     * @return SalesDocument
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
     * @return SalesDocument
     */
    public function setIsVoided($IsVoided)
    {
      $this->IsVoided = $IsVoided;
      return $this;
    }

    /**
     * @return SalesDocumentKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param SalesDocumentKey $Key
     * @return SalesDocument
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
     * @return SalesDocument
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
     * @return MoneyAmount
     */
    public function getLineTotalAmount()
    {
      return $this->LineTotalAmount;
    }

    /**
     * @param MoneyAmount $LineTotalAmount
     * @return SalesDocument
     */
    public function setLineTotalAmount($LineTotalAmount)
    {
      $this->LineTotalAmount = $LineTotalAmount;
      return $this;
    }

    /**
     * @return int
     */
    public function getMasterNumber()
    {
      return $this->MasterNumber;
    }

    /**
     * @param int $MasterNumber
     * @return SalesDocument
     */
    public function setMasterNumber($MasterNumber)
    {
      $this->MasterNumber = $MasterNumber;
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
     * @return SalesDocument
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
     * @return SalesDocument
     */
    public function setMiscellaneousTaxAmount($MiscellaneousTaxAmount)
    {
      $this->MiscellaneousTaxAmount = $MiscellaneousTaxAmount;
      return $this;
    }

    /**
     * @return SalesTaxBasis
     */
    public function getMiscellaneousTaxBasis()
    {
      return $this->MiscellaneousTaxBasis;
    }

    /**
     * @param SalesTaxBasis $MiscellaneousTaxBasis
     * @return SalesDocument
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
     * @return SalesDocument
     */
    public function setMiscellaneousTaxScheduleKey($MiscellaneousTaxScheduleKey)
    {
      $this->MiscellaneousTaxScheduleKey = $MiscellaneousTaxScheduleKey;
      return $this;
    }

    /**
     * @return ArrayOfSalesDocumentTax
     */
    public function getMiscellaneousTaxes()
    {
      return $this->MiscellaneousTaxes;
    }

    /**
     * @param ArrayOfSalesDocumentTax $MiscellaneousTaxes
     * @return SalesDocument
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
     * @return SalesDocument
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
    public function getNote()
    {
      return $this->Note;
    }

    /**
     * @param string $Note
     * @return SalesDocument
     */
    public function setNote($Note)
    {
      $this->Note = $Note;
      return $this;
    }

    /**
     * @return SalesDocumentKey
     */
    public function getOriginalSalesDocumentKey()
    {
      return $this->OriginalSalesDocumentKey;
    }

    /**
     * @param SalesDocumentKey $OriginalSalesDocumentKey
     * @return SalesDocument
     */
    public function setOriginalSalesDocumentKey($OriginalSalesDocumentKey)
    {
      $this->OriginalSalesDocumentKey = $OriginalSalesDocumentKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getOriginalSalesDocumentType()
    {
      return $this->OriginalSalesDocumentType;
    }

    /**
     * @param string $OriginalSalesDocumentType
     * @return SalesDocument
     */
    public function setOriginalSalesDocumentType($OriginalSalesDocumentType)
    {
      $this->OriginalSalesDocumentType = $OriginalSalesDocumentType;
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
     * @return SalesDocument
     */
    public function setPaymentTermsKey($PaymentTermsKey)
    {
      $this->PaymentTermsKey = $PaymentTermsKey;
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
     * @return SalesDocument
     */
    public function setPriceLevelKey($PriceLevelKey)
    {
      $this->PriceLevelKey = $PriceLevelKey;
      return $this;
    }

    /**
     * @return ArrayOfSalesProcessHold
     */
    public function getProcessHolds()
    {
      return $this->ProcessHolds;
    }

    /**
     * @param ArrayOfSalesProcessHold $ProcessHolds
     * @return SalesDocument
     */
    public function setProcessHolds($ProcessHolds)
    {
      $this->ProcessHolds = $ProcessHolds;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getQuoteDate()
    {
      if ($this->QuoteDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->QuoteDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $QuoteDate
     * @return SalesDocument
     */
    public function setQuoteDate(\DateTime $QuoteDate = null)
    {
      if ($QuoteDate == null) {
       $this->QuoteDate = null;
      } else {
        $this->QuoteDate = $QuoteDate->format(\DateTime::ATOM);
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
     * @return SalesDocument
     */
    public function setReference($Reference)
    {
      $this->Reference = $Reference;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getRequestedShipDate()
    {
      if ($this->RequestedShipDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->RequestedShipDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $RequestedShipDate
     * @return SalesDocument
     */
    public function setRequestedShipDate(\DateTime $RequestedShipDate = null)
    {
      if ($RequestedShipDate == null) {
       $this->RequestedShipDate = null;
      } else {
        $this->RequestedShipDate = $RequestedShipDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getReturnDate()
    {
      if ($this->ReturnDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ReturnDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ReturnDate
     * @return SalesDocument
     */
    public function setReturnDate(\DateTime $ReturnDate = null)
    {
      if ($ReturnDate == null) {
       $this->ReturnDate = null;
      } else {
        $this->ReturnDate = $ReturnDate->format(\DateTime::ATOM);
      }
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
     * @return SalesDocument
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
     * @return SalesDocument
     */
    public function setSalespersonKey($SalespersonKey)
    {
      $this->SalespersonKey = $SalespersonKey;
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
     * @return SalesDocument
     */
    public function setShipCompleteOnly($ShipCompleteOnly)
    {
      $this->ShipCompleteOnly = $ShipCompleteOnly;
      return $this;
    }

    /**
     * @return BusinessAddress
     */
    public function getShipToAddress()
    {
      return $this->ShipToAddress;
    }

    /**
     * @param BusinessAddress $ShipToAddress
     * @return SalesDocument
     */
    public function setShipToAddress($ShipToAddress)
    {
      $this->ShipToAddress = $ShipToAddress;
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
     * @return SalesDocument
     */
    public function setShipToAddressKey($ShipToAddressKey)
    {
      $this->ShipToAddressKey = $ShipToAddressKey;
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
     * @return SalesDocument
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
     * @return SalesDocument
     */
    public function setTaxAmount($TaxAmount)
    {
      $this->TaxAmount = $TaxAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getTaxExemptNumber1()
    {
      return $this->TaxExemptNumber1;
    }

    /**
     * @param string $TaxExemptNumber1
     * @return SalesDocument
     */
    public function setTaxExemptNumber1($TaxExemptNumber1)
    {
      $this->TaxExemptNumber1 = $TaxExemptNumber1;
      return $this;
    }

    /**
     * @return string
     */
    public function getTaxExemptNumber2()
    {
      return $this->TaxExemptNumber2;
    }

    /**
     * @param string $TaxExemptNumber2
     * @return SalesDocument
     */
    public function setTaxExemptNumber2($TaxExemptNumber2)
    {
      $this->TaxExemptNumber2 = $TaxExemptNumber2;
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
     * @return SalesDocument
     */
    public function setTaxRegistrationNumber($TaxRegistrationNumber)
    {
      $this->TaxRegistrationNumber = $TaxRegistrationNumber;
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
     * @return SalesDocument
     */
    public function setTaxScheduleKey($TaxScheduleKey)
    {
      $this->TaxScheduleKey = $TaxScheduleKey;
      return $this;
    }

    /**
     * @return ArrayOfSalesDocumentTax
     */
    public function getTaxes()
    {
      return $this->Taxes;
    }

    /**
     * @param ArrayOfSalesDocumentTax $Taxes
     * @return SalesDocument
     */
    public function setTaxes($Taxes)
    {
      $this->Taxes = $Taxes;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getTotalAmount()
    {
      return $this->TotalAmount;
    }

    /**
     * @param MoneyAmount $TotalAmount
     * @return SalesDocument
     */
    public function setTotalAmount($TotalAmount)
    {
      $this->TotalAmount = $TotalAmount;
      return $this;
    }

    /**
     * @return ArrayOfSalesTrackingNumber
     */
    public function getTrackingNumbers()
    {
      return $this->TrackingNumbers;
    }

    /**
     * @param ArrayOfSalesTrackingNumber $TrackingNumbers
     * @return SalesDocument
     */
    public function setTrackingNumbers($TrackingNumbers)
    {
      $this->TrackingNumbers = $TrackingNumbers;
      return $this;
    }

    /**
     * @return MoneyPercentChoice
     */
    public function getTradeDiscount()
    {
      return $this->TradeDiscount;
    }

    /**
     * @param MoneyPercentChoice $TradeDiscount
     * @return SalesDocument
     */
    public function setTradeDiscount($TradeDiscount)
    {
      $this->TradeDiscount = $TradeDiscount;
      return $this;
    }

    /**
     * @return SalesTransactionState
     */
    public function getTransactionState()
    {
      return $this->TransactionState;
    }

    /**
     * @param SalesTransactionState $TransactionState
     * @return SalesDocument
     */
    public function setTransactionState($TransactionState)
    {
      $this->TransactionState = $TransactionState;
      return $this;
    }

    /**
     * @return SalesDocumentType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param SalesDocumentType $Type
     * @return SalesDocument
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return string
     */
    public function getUPSZone()
    {
      return $this->UPSZone;
    }

    /**
     * @param string $UPSZone
     * @return SalesDocument
     */
    public function setUPSZone($UPSZone)
    {
      $this->UPSZone = $UPSZone;
      return $this;
    }

    /**
     * @return SalesUserDefined
     */
    public function getUserDefined()
    {
      return $this->UserDefined;
    }

    /**
     * @param SalesUserDefined $UserDefined
     * @return SalesDocument
     */
    public function setUserDefined($UserDefined)
    {
      $this->UserDefined = $UserDefined;
      return $this;
    }

    /**
     * @return WarehouseKey
     */
    public function getWarehouseKey()
    {
      return $this->WarehouseKey;
    }

    /**
     * @param WarehouseKey $WarehouseKey
     * @return SalesDocument
     */
    public function setWarehouseKey($WarehouseKey)
    {
      $this->WarehouseKey = $WarehouseKey;
      return $this;
    }

}
