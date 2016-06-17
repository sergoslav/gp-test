<?php

class PurchaseReceipt extends BusinessObject
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
     * @var \DateTime $GeneralLedgerPostingDate
     */
    protected $GeneralLedgerPostingDate = null;

    /**
     * @var PurchaseTransactionKey $Key
     */
    protected $Key = null;

    /**
     * @var ArrayOfPurchaseReceiptLine $Lines
     */
    protected $Lines = null;

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
     * @var MoneyAmount $TotalLandedCostAmount
     */
    protected $TotalLandedCostAmount = null;

    /**
     * @var PurchaseTransactionState $TransactionState
     */
    protected $TransactionState = null;

    /**
     * @var ArrayOfPurchaseUserDefined $UserDefined
     */
    protected $UserDefined = null;

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
     * @return PurchaseReceipt
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
     * @return PurchaseReceipt
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
     * @return PurchaseReceipt
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
     * @return PurchaseReceipt
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
     * @return PurchaseReceipt
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
     * @return PurchaseReceipt
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
     * @return PurchaseReceipt
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
     * @return PurchaseReceipt
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
     * @return PurchaseReceipt
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
     * @return PurchaseReceipt
     */
    public function setExchangeRate($ExchangeRate)
    {
      $this->ExchangeRate = $ExchangeRate;
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
     * @return PurchaseReceipt
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
     * @return PurchaseReceipt
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return ArrayOfPurchaseReceiptLine
     */
    public function getLines()
    {
      return $this->Lines;
    }

    /**
     * @param ArrayOfPurchaseReceiptLine $Lines
     * @return PurchaseReceipt
     */
    public function setLines($Lines)
    {
      $this->Lines = $Lines;
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
     * @return PurchaseReceipt
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
     * @return PurchaseReceipt
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
     * @return PurchaseReceipt
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
     * @return PurchaseReceipt
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
     * @return PurchaseReceipt
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
     * @return PurchaseReceipt
     */
    public function setSubtotal($Subtotal)
    {
      $this->Subtotal = $Subtotal;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getTotalLandedCostAmount()
    {
      return $this->TotalLandedCostAmount;
    }

    /**
     * @param MoneyAmount $TotalLandedCostAmount
     * @return PurchaseReceipt
     */
    public function setTotalLandedCostAmount($TotalLandedCostAmount)
    {
      $this->TotalLandedCostAmount = $TotalLandedCostAmount;
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
     * @return PurchaseReceipt
     */
    public function setTransactionState($TransactionState)
    {
      $this->TransactionState = $TransactionState;
      return $this;
    }

    /**
     * @return ArrayOfPurchaseUserDefined
     */
    public function getUserDefined()
    {
      return $this->UserDefined;
    }

    /**
     * @param ArrayOfPurchaseUserDefined $UserDefined
     * @return PurchaseReceipt
     */
    public function setUserDefined($UserDefined)
    {
      $this->UserDefined = $UserDefined;
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
     * @return PurchaseReceipt
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
     * @return PurchaseReceipt
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
     * @return PurchaseReceipt
     */
    public function setVendorName($VendorName)
    {
      $this->VendorName = $VendorName;
      return $this;
    }

}
