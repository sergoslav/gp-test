<?php

class PurchaseInvoiceSummary
{

    /**
     * @var BatchKey $BatchKey
     */
    protected $BatchKey = null;

    /**
     * @var \DateTime $CreatedDate
     */
    protected $CreatedDate = null;

    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

    /**
     * @var MoneyAmount $FreightAmount
     */
    protected $FreightAmount = null;

    /**
     * @var PurchaseTransactionKey $Key
     */
    protected $Key = null;

    /**
     * @var MoneyAmount $MiscellaneousAmount
     */
    protected $MiscellaneousAmount = null;

    /**
     * @var \DateTime $ModifiedDate
     */
    protected $ModifiedDate = null;

    /**
     * @var MoneyAmount $Subtotal
     */
    protected $Subtotal = null;

    /**
     * @var MoneyAmount $TaxAmount
     */
    protected $TaxAmount = null;

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

    
    public function __construct()
    {
    
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
     * @return PurchaseInvoiceSummary
     */
    public function setBatchKey($BatchKey)
    {
      $this->BatchKey = $BatchKey;
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
     * @return PurchaseInvoiceSummary
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
     * @return PurchaseInvoiceSummary
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
    public function getFreightAmount()
    {
      return $this->FreightAmount;
    }

    /**
     * @param MoneyAmount $FreightAmount
     * @return PurchaseInvoiceSummary
     */
    public function setFreightAmount($FreightAmount)
    {
      $this->FreightAmount = $FreightAmount;
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
     * @return PurchaseInvoiceSummary
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
     * @return PurchaseInvoiceSummary
     */
    public function setMiscellaneousAmount($MiscellaneousAmount)
    {
      $this->MiscellaneousAmount = $MiscellaneousAmount;
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
     * @return PurchaseInvoiceSummary
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
     * @return MoneyAmount
     */
    public function getSubtotal()
    {
      return $this->Subtotal;
    }

    /**
     * @param MoneyAmount $Subtotal
     * @return PurchaseInvoiceSummary
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
     * @return PurchaseInvoiceSummary
     */
    public function setTaxAmount($TaxAmount)
    {
      $this->TaxAmount = $TaxAmount;
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
     * @return PurchaseInvoiceSummary
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
     * @return PurchaseInvoiceSummary
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
     * @return PurchaseInvoiceSummary
     */
    public function setVendorKey($VendorKey)
    {
      $this->VendorKey = $VendorKey;
      return $this;
    }

}
