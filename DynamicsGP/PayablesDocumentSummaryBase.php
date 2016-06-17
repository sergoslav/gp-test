<?php

class PayablesDocumentSummaryBase
{

    /**
     * @var BatchKey $BatchKey
     */
    protected $BatchKey = null;

    /**
     * @var CurrencyKey $CurrencyKey
     */
    protected $CurrencyKey = null;

    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

    /**
     * @var MoneyAmount $DocumentAmount
     */
    protected $DocumentAmount = null;

    /**
     * @var MoneyAmount $FreightAmount
     */
    protected $FreightAmount = null;

    /**
     * @var PayablesDocumentKey $Key
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
     * @var MoneyAmount $TaxAmount
     */
    protected $TaxAmount = null;

    /**
     * @var MoneyAmount $TradeDiscountAmount
     */
    protected $TradeDiscountAmount = null;

    /**
     * @var PayablesTransactionState $TransactionState
     */
    protected $TransactionState = null;

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
     * @return PayablesDocumentSummaryBase
     */
    public function setBatchKey($BatchKey)
    {
      $this->BatchKey = $BatchKey;
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
     * @return PayablesDocumentSummaryBase
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
     * @return PayablesDocumentSummaryBase
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
    public function getDocumentAmount()
    {
      return $this->DocumentAmount;
    }

    /**
     * @param MoneyAmount $DocumentAmount
     * @return PayablesDocumentSummaryBase
     */
    public function setDocumentAmount($DocumentAmount)
    {
      $this->DocumentAmount = $DocumentAmount;
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
     * @return PayablesDocumentSummaryBase
     */
    public function setFreightAmount($FreightAmount)
    {
      $this->FreightAmount = $FreightAmount;
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
     * @return PayablesDocumentSummaryBase
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
     * @return PayablesDocumentSummaryBase
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
     * @return PayablesDocumentSummaryBase
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
    public function getTaxAmount()
    {
      return $this->TaxAmount;
    }

    /**
     * @param MoneyAmount $TaxAmount
     * @return PayablesDocumentSummaryBase
     */
    public function setTaxAmount($TaxAmount)
    {
      $this->TaxAmount = $TaxAmount;
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
     * @return PayablesDocumentSummaryBase
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
     * @return PayablesDocumentSummaryBase
     */
    public function setTransactionState($TransactionState)
    {
      $this->TransactionState = $TransactionState;
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
     * @return PayablesDocumentSummaryBase
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
     * @return PayablesDocumentSummaryBase
     */
    public function setVendorName($VendorName)
    {
      $this->VendorName = $VendorName;
      return $this;
    }

}
