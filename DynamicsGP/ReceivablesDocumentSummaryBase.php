<?php

class ReceivablesDocumentSummaryBase
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
     * @var MoneyAmount $DocumentAmount
     */
    protected $DocumentAmount = null;

    /**
     * @var MoneyAmount $FreightAmount
     */
    protected $FreightAmount = null;

    /**
     * @var ReceivablesDocumentKey $Key
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
     * @var SalespersonKey $SalespersonKey
     */
    protected $SalespersonKey = null;

    /**
     * @var MoneyAmount $TaxAmount
     */
    protected $TaxAmount = null;

    /**
     * @var MoneyAmount $TradeDiscountAmount
     */
    protected $TradeDiscountAmount = null;

    /**
     * @var ReceivablesTransactionState $TransactionState
     */
    protected $TransactionState = null;

    
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
     * @return ReceivablesDocumentSummaryBase
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
     * @return ReceivablesDocumentSummaryBase
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
     * @return ReceivablesDocumentSummaryBase
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
     * @return ReceivablesDocumentSummaryBase
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
     * @return ReceivablesDocumentSummaryBase
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
     * @return ReceivablesDocumentSummaryBase
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
     * @return ReceivablesDocumentSummaryBase
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
     * @return ReceivablesDocumentSummaryBase
     */
    public function setFreightAmount($FreightAmount)
    {
      $this->FreightAmount = $FreightAmount;
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
     * @return ReceivablesDocumentSummaryBase
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
     * @return ReceivablesDocumentSummaryBase
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
     * @return ReceivablesDocumentSummaryBase
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
     * @return SalespersonKey
     */
    public function getSalespersonKey()
    {
      return $this->SalespersonKey;
    }

    /**
     * @param SalespersonKey $SalespersonKey
     * @return ReceivablesDocumentSummaryBase
     */
    public function setSalespersonKey($SalespersonKey)
    {
      $this->SalespersonKey = $SalespersonKey;
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
     * @return ReceivablesDocumentSummaryBase
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
     * @return ReceivablesDocumentSummaryBase
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
     * @return ReceivablesDocumentSummaryBase
     */
    public function setTransactionState($TransactionState)
    {
      $this->TransactionState = $TransactionState;
      return $this;
    }

}
