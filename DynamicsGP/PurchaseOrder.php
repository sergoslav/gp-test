<?php

class PurchaseOrder extends BusinessObject
{

    /**
     * @var MoneyAmount $BackoutFreightTaxAmount
     */
    protected $BackoutFreightTaxAmount = null;

    /**
     * @var MoneyAmount $BackoutMiscellaneousTaxAmount
     */
    protected $BackoutMiscellaneousTaxAmount = null;

    /**
     * @var MoneyAmount $BackoutTaxAmount
     */
    protected $BackoutTaxAmount = null;

    /**
     * @var AddressKey $BillToAddressKey
     */
    protected $BillToAddressKey = null;

    /**
     * @var BuyerKey $BuyerKey
     */
    protected $BuyerKey = null;

    /**
     * @var MoneyAmount $CanceledSubtotal
     */
    protected $CanceledSubtotal = null;

    /**
     * @var string $Comment
     */
    protected $Comment = null;

    /**
     * @var CommentKey $CommentKey
     */
    protected $CommentKey = null;

    /**
     * @var CompanyKey $CompanyKey
     */
    protected $CompanyKey = null;

    /**
     * @var string $ConfirmWith
     */
    protected $ConfirmWith = null;

    /**
     * @var \DateTime $ContractEndDate
     */
    protected $ContractEndDate = null;

    /**
     * @var string $ContractNumber
     */
    protected $ContractNumber = null;

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
     * @var \DateTime $Date
     */
    protected $Date = null;

    /**
     * @var boolean $DoesAllowSalesOrderCommitments
     */
    protected $DoesAllowSalesOrderCommitments = null;

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
     * @var ArrayOfPurchaseTax $FreightTaxes
     */
    protected $FreightTaxes = null;

    /**
     * @var boolean $IsOnHold
     */
    protected $IsOnHold = null;

    /**
     * @var PurchaseTransactionKey $Key
     */
    protected $Key = null;

    /**
     * @var \DateTime $LastEditDate
     */
    protected $LastEditDate = null;

    /**
     * @var \DateTime $LastPrintedDate
     */
    protected $LastPrintedDate = null;

    /**
     * @var ArrayOfPurchaseOrderLine $Lines
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
     * @var ArrayOfPurchaseTax $MiscellaneousTaxes
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
     * @var \DateTime $PromisedDate
     */
    protected $PromisedDate = null;

    /**
     * @var \DateTime $PromisedShipDate
     */
    protected $PromisedShipDate = null;

    /**
     * @var BusinessAddress $PurchaseAddress
     */
    protected $PurchaseAddress = null;

    /**
     * @var AddressKey $PurchaseAddressKey
     */
    protected $PurchaseAddressKey = null;

    /**
     * @var MoneyAmount $RemainingSubtotal
     */
    protected $RemainingSubtotal = null;

    /**
     * @var \DateTime $RequestedDate
     */
    protected $RequestedDate = null;

    /**
     * @var \DateTime $RequisitionDate
     */
    protected $RequisitionDate = null;

    /**
     * @var int $RevisionNumber
     */
    protected $RevisionNumber = null;

    /**
     * @var BusinessAddress $ShipToAddress
     */
    protected $ShipToAddress = null;

    /**
     * @var AddressKey $ShipToAddressKey
     */
    protected $ShipToAddressKey = null;

    /**
     * @var ShippingMethodKey $ShippingMethodKey
     */
    protected $ShippingMethodKey = null;

    /**
     * @var PurchaseOrderStatus $Status
     */
    protected $Status = null;

    /**
     * @var StatusGroup $StatusGroup
     */
    protected $StatusGroup = null;

    /**
     * @var MoneyAmount $Subtotal
     */
    protected $Subtotal = null;

    /**
     * @var MoneyAmount $TaxAmount
     */
    protected $TaxAmount = null;

    /**
     * @var string $TaxRegistrationNumber
     */
    protected $TaxRegistrationNumber = null;

    /**
     * @var TaxScheduleKey $TaxScheduleKey
     */
    protected $TaxScheduleKey = null;

    /**
     * @var ArrayOfPurchaseTax $Taxes
     */
    protected $Taxes = null;

    /**
     * @var Terms $Terms
     */
    protected $Terms = null;

    /**
     * @var int $TimesPrinted
     */
    protected $TimesPrinted = null;

    /**
     * @var MoneyAmount $TotalAmount
     */
    protected $TotalAmount = null;

    /**
     * @var MoneyAmount $TradeDiscountAmount
     */
    protected $TradeDiscountAmount = null;

    /**
     * @var PurchaseTransactionState $TransactionState
     */
    protected $TransactionState = null;

    /**
     * @var PurchaseOrderType $Type
     */
    protected $Type = null;

    /**
     * @var VendorKey $VendorKey
     */
    protected $VendorKey = null;

    /**
     * @var string $VendorName
     */
    protected $VendorName = null;

    /**
     * @var WorkflowPriority $WorkflowPriority
     */
    protected $WorkflowPriority = null;

    /**
     * @var ArrayOfWorkflow $Workflows
     */
    protected $Workflows = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return MoneyAmount
     */
    public function getBackoutFreightTaxAmount()
    {
      return $this->BackoutFreightTaxAmount;
    }

    /**
     * @param MoneyAmount $BackoutFreightTaxAmount
     * @return PurchaseOrder
     */
    public function setBackoutFreightTaxAmount($BackoutFreightTaxAmount)
    {
      $this->BackoutFreightTaxAmount = $BackoutFreightTaxAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getBackoutMiscellaneousTaxAmount()
    {
      return $this->BackoutMiscellaneousTaxAmount;
    }

    /**
     * @param MoneyAmount $BackoutMiscellaneousTaxAmount
     * @return PurchaseOrder
     */
    public function setBackoutMiscellaneousTaxAmount($BackoutMiscellaneousTaxAmount)
    {
      $this->BackoutMiscellaneousTaxAmount = $BackoutMiscellaneousTaxAmount;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getBackoutTaxAmount()
    {
      return $this->BackoutTaxAmount;
    }

    /**
     * @param MoneyAmount $BackoutTaxAmount
     * @return PurchaseOrder
     */
    public function setBackoutTaxAmount($BackoutTaxAmount)
    {
      $this->BackoutTaxAmount = $BackoutTaxAmount;
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
     * @return PurchaseOrder
     */
    public function setBillToAddressKey($BillToAddressKey)
    {
      $this->BillToAddressKey = $BillToAddressKey;
      return $this;
    }

    /**
     * @return BuyerKey
     */
    public function getBuyerKey()
    {
      return $this->BuyerKey;
    }

    /**
     * @param BuyerKey $BuyerKey
     * @return PurchaseOrder
     */
    public function setBuyerKey($BuyerKey)
    {
      $this->BuyerKey = $BuyerKey;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getCanceledSubtotal()
    {
      return $this->CanceledSubtotal;
    }

    /**
     * @param MoneyAmount $CanceledSubtotal
     * @return PurchaseOrder
     */
    public function setCanceledSubtotal($CanceledSubtotal)
    {
      $this->CanceledSubtotal = $CanceledSubtotal;
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
     * @return PurchaseOrder
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
     * @return PurchaseOrder
     */
    public function setCommentKey($CommentKey)
    {
      $this->CommentKey = $CommentKey;
      return $this;
    }

    /**
     * @return CompanyKey
     */
    public function getCompanyKey()
    {
      return $this->CompanyKey;
    }

    /**
     * @param CompanyKey $CompanyKey
     * @return PurchaseOrder
     */
    public function setCompanyKey($CompanyKey)
    {
      $this->CompanyKey = $CompanyKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getConfirmWith()
    {
      return $this->ConfirmWith;
    }

    /**
     * @param string $ConfirmWith
     * @return PurchaseOrder
     */
    public function setConfirmWith($ConfirmWith)
    {
      $this->ConfirmWith = $ConfirmWith;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getContractEndDate()
    {
      if ($this->ContractEndDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ContractEndDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ContractEndDate
     * @return PurchaseOrder
     */
    public function setContractEndDate(\DateTime $ContractEndDate = null)
    {
      if ($ContractEndDate == null) {
       $this->ContractEndDate = null;
      } else {
        $this->ContractEndDate = $ContractEndDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getContractNumber()
    {
      return $this->ContractNumber;
    }

    /**
     * @param string $ContractNumber
     * @return PurchaseOrder
     */
    public function setContractNumber($ContractNumber)
    {
      $this->ContractNumber = $ContractNumber;
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
     * @return PurchaseOrder
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
     * @return PurchaseOrder
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
     * @return PurchaseOrder
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
     * @return PurchaseOrder
     */
    public function setCustomerKey($CustomerKey)
    {
      $this->CustomerKey = $CustomerKey;
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
     * @return PurchaseOrder
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
     * @return boolean
     */
    public function getDoesAllowSalesOrderCommitments()
    {
      return $this->DoesAllowSalesOrderCommitments;
    }

    /**
     * @param boolean $DoesAllowSalesOrderCommitments
     * @return PurchaseOrder
     */
    public function setDoesAllowSalesOrderCommitments($DoesAllowSalesOrderCommitments)
    {
      $this->DoesAllowSalesOrderCommitments = $DoesAllowSalesOrderCommitments;
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
     * @return PurchaseOrder
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
     * @return PurchaseOrder
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
     * @return PurchaseOrder
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
     * @return PurchaseOrder
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
     * @return PurchaseOrder
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
     * @return PurchaseOrder
     */
    public function setFreightTaxScheduleKey($FreightTaxScheduleKey)
    {
      $this->FreightTaxScheduleKey = $FreightTaxScheduleKey;
      return $this;
    }

    /**
     * @return ArrayOfPurchaseTax
     */
    public function getFreightTaxes()
    {
      return $this->FreightTaxes;
    }

    /**
     * @param ArrayOfPurchaseTax $FreightTaxes
     * @return PurchaseOrder
     */
    public function setFreightTaxes($FreightTaxes)
    {
      $this->FreightTaxes = $FreightTaxes;
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
     * @return PurchaseOrder
     */
    public function setIsOnHold($IsOnHold)
    {
      $this->IsOnHold = $IsOnHold;
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
     * @return PurchaseOrder
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastEditDate()
    {
      if ($this->LastEditDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastEditDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastEditDate
     * @return PurchaseOrder
     */
    public function setLastEditDate(\DateTime $LastEditDate = null)
    {
      if ($LastEditDate == null) {
       $this->LastEditDate = null;
      } else {
        $this->LastEditDate = $LastEditDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastPrintedDate()
    {
      if ($this->LastPrintedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastPrintedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastPrintedDate
     * @return PurchaseOrder
     */
    public function setLastPrintedDate(\DateTime $LastPrintedDate = null)
    {
      if ($LastPrintedDate == null) {
       $this->LastPrintedDate = null;
      } else {
        $this->LastPrintedDate = $LastPrintedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return ArrayOfPurchaseOrderLine
     */
    public function getLines()
    {
      return $this->Lines;
    }

    /**
     * @param ArrayOfPurchaseOrderLine $Lines
     * @return PurchaseOrder
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
     * @return PurchaseOrder
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
     * @return PurchaseOrder
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
     * @return PurchaseOrder
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
     * @return PurchaseOrder
     */
    public function setMiscellaneousTaxScheduleKey($MiscellaneousTaxScheduleKey)
    {
      $this->MiscellaneousTaxScheduleKey = $MiscellaneousTaxScheduleKey;
      return $this;
    }

    /**
     * @return ArrayOfPurchaseTax
     */
    public function getMiscellaneousTaxes()
    {
      return $this->MiscellaneousTaxes;
    }

    /**
     * @param ArrayOfPurchaseTax $MiscellaneousTaxes
     * @return PurchaseOrder
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
     * @return PurchaseOrder
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
     * @return PurchaseOrder
     */
    public function setPaymentTermsKey($PaymentTermsKey)
    {
      $this->PaymentTermsKey = $PaymentTermsKey;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPromisedDate()
    {
      if ($this->PromisedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->PromisedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $PromisedDate
     * @return PurchaseOrder
     */
    public function setPromisedDate(\DateTime $PromisedDate = null)
    {
      if ($PromisedDate == null) {
       $this->PromisedDate = null;
      } else {
        $this->PromisedDate = $PromisedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPromisedShipDate()
    {
      if ($this->PromisedShipDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->PromisedShipDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $PromisedShipDate
     * @return PurchaseOrder
     */
    public function setPromisedShipDate(\DateTime $PromisedShipDate = null)
    {
      if ($PromisedShipDate == null) {
       $this->PromisedShipDate = null;
      } else {
        $this->PromisedShipDate = $PromisedShipDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return BusinessAddress
     */
    public function getPurchaseAddress()
    {
      return $this->PurchaseAddress;
    }

    /**
     * @param BusinessAddress $PurchaseAddress
     * @return PurchaseOrder
     */
    public function setPurchaseAddress($PurchaseAddress)
    {
      $this->PurchaseAddress = $PurchaseAddress;
      return $this;
    }

    /**
     * @return AddressKey
     */
    public function getPurchaseAddressKey()
    {
      return $this->PurchaseAddressKey;
    }

    /**
     * @param AddressKey $PurchaseAddressKey
     * @return PurchaseOrder
     */
    public function setPurchaseAddressKey($PurchaseAddressKey)
    {
      $this->PurchaseAddressKey = $PurchaseAddressKey;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getRemainingSubtotal()
    {
      return $this->RemainingSubtotal;
    }

    /**
     * @param MoneyAmount $RemainingSubtotal
     * @return PurchaseOrder
     */
    public function setRemainingSubtotal($RemainingSubtotal)
    {
      $this->RemainingSubtotal = $RemainingSubtotal;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getRequestedDate()
    {
      if ($this->RequestedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->RequestedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $RequestedDate
     * @return PurchaseOrder
     */
    public function setRequestedDate(\DateTime $RequestedDate = null)
    {
      if ($RequestedDate == null) {
       $this->RequestedDate = null;
      } else {
        $this->RequestedDate = $RequestedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getRequisitionDate()
    {
      if ($this->RequisitionDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->RequisitionDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $RequisitionDate
     * @return PurchaseOrder
     */
    public function setRequisitionDate(\DateTime $RequisitionDate = null)
    {
      if ($RequisitionDate == null) {
       $this->RequisitionDate = null;
      } else {
        $this->RequisitionDate = $RequisitionDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return int
     */
    public function getRevisionNumber()
    {
      return $this->RevisionNumber;
    }

    /**
     * @param int $RevisionNumber
     * @return PurchaseOrder
     */
    public function setRevisionNumber($RevisionNumber)
    {
      $this->RevisionNumber = $RevisionNumber;
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
     * @return PurchaseOrder
     */
    public function setShipToAddress($ShipToAddress)
    {
      $this->ShipToAddress = $ShipToAddress;
      return $this;
    }

    /**
     * @return AddressKey
     */
    public function getShipToAddressKey()
    {
      return $this->ShipToAddressKey;
    }

    /**
     * @param AddressKey $ShipToAddressKey
     * @return PurchaseOrder
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
     * @return PurchaseOrder
     */
    public function setShippingMethodKey($ShippingMethodKey)
    {
      $this->ShippingMethodKey = $ShippingMethodKey;
      return $this;
    }

    /**
     * @return PurchaseOrderStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param PurchaseOrderStatus $Status
     * @return PurchaseOrder
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return StatusGroup
     */
    public function getStatusGroup()
    {
      return $this->StatusGroup;
    }

    /**
     * @param StatusGroup $StatusGroup
     * @return PurchaseOrder
     */
    public function setStatusGroup($StatusGroup)
    {
      $this->StatusGroup = $StatusGroup;
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
     * @return PurchaseOrder
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
     * @return PurchaseOrder
     */
    public function setTaxAmount($TaxAmount)
    {
      $this->TaxAmount = $TaxAmount;
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
     * @return PurchaseOrder
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
     * @return PurchaseOrder
     */
    public function setTaxScheduleKey($TaxScheduleKey)
    {
      $this->TaxScheduleKey = $TaxScheduleKey;
      return $this;
    }

    /**
     * @return ArrayOfPurchaseTax
     */
    public function getTaxes()
    {
      return $this->Taxes;
    }

    /**
     * @param ArrayOfPurchaseTax $Taxes
     * @return PurchaseOrder
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
     * @return PurchaseOrder
     */
    public function setTerms($Terms)
    {
      $this->Terms = $Terms;
      return $this;
    }

    /**
     * @return int
     */
    public function getTimesPrinted()
    {
      return $this->TimesPrinted;
    }

    /**
     * @param int $TimesPrinted
     * @return PurchaseOrder
     */
    public function setTimesPrinted($TimesPrinted)
    {
      $this->TimesPrinted = $TimesPrinted;
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
     * @return PurchaseOrder
     */
    public function setTotalAmount($TotalAmount)
    {
      $this->TotalAmount = $TotalAmount;
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
     * @return PurchaseOrder
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
     * @return PurchaseOrder
     */
    public function setTransactionState($TransactionState)
    {
      $this->TransactionState = $TransactionState;
      return $this;
    }

    /**
     * @return PurchaseOrderType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param PurchaseOrderType $Type
     * @return PurchaseOrder
     */
    public function setType($Type)
    {
      $this->Type = $Type;
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
     * @return PurchaseOrder
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
     * @return PurchaseOrder
     */
    public function setVendorName($VendorName)
    {
      $this->VendorName = $VendorName;
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
     * @return PurchaseOrder
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
     * @return PurchaseOrder
     */
    public function setWorkflows($Workflows)
    {
      $this->Workflows = $Workflows;
      return $this;
    }

}
