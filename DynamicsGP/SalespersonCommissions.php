<?php

class SalespersonCommissions extends BusinessObject
{

    /**
     * @var MoneyAmount $Amount
     */
    protected $Amount = null;

    /**
     * @var string $AuditTrailCode
     */
    protected $AuditTrailCode = null;

    /**
     * @var string $CommissionAuditTrailCode
     */
    protected $CommissionAuditTrailCode = null;

    /**
     * @var Percent $CommissionPercent
     */
    protected $CommissionPercent = null;

    /**
     * @var CurrencyKey $CurrencyKey
     */
    protected $CurrencyKey = null;

    /**
     * @var CustomerKey $CustomerKey
     */
    protected $CustomerKey = null;

    /**
     * @var boolean $IsPaid
     */
    protected $IsPaid = null;

    /**
     * @var boolean $IsPosted
     */
    protected $IsPosted = null;

    /**
     * @var SalespersonCommissionsKey $Key
     */
    protected $Key = null;

    /**
     * @var MoneyAmount $NoncommissionedAmount
     */
    protected $NoncommissionedAmount = null;

    /**
     * @var Percent $PercentOfSale
     */
    protected $PercentOfSale = null;

    /**
     * @var MoneyAmount $SalesAmount
     */
    protected $SalesAmount = null;

    /**
     * @var SalesTerritoryKey $SalesTerritoryKey
     */
    protected $SalesTerritoryKey = null;

    /**
     * @var SalespersonKey $SalespersonKey
     */
    protected $SalespersonKey = null;

    /**
     * @var SalesCommissionTransactionState $TransactionState
     */
    protected $TransactionState = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return MoneyAmount
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param MoneyAmount $Amount
     * @return SalespersonCommissions
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
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
     * @return SalespersonCommissions
     */
    public function setAuditTrailCode($AuditTrailCode)
    {
      $this->AuditTrailCode = $AuditTrailCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCommissionAuditTrailCode()
    {
      return $this->CommissionAuditTrailCode;
    }

    /**
     * @param string $CommissionAuditTrailCode
     * @return SalespersonCommissions
     */
    public function setCommissionAuditTrailCode($CommissionAuditTrailCode)
    {
      $this->CommissionAuditTrailCode = $CommissionAuditTrailCode;
      return $this;
    }

    /**
     * @return Percent
     */
    public function getCommissionPercent()
    {
      return $this->CommissionPercent;
    }

    /**
     * @param Percent $CommissionPercent
     * @return SalespersonCommissions
     */
    public function setCommissionPercent($CommissionPercent)
    {
      $this->CommissionPercent = $CommissionPercent;
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
     * @return SalespersonCommissions
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
     * @return SalespersonCommissions
     */
    public function setCustomerKey($CustomerKey)
    {
      $this->CustomerKey = $CustomerKey;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPaid()
    {
      return $this->IsPaid;
    }

    /**
     * @param boolean $IsPaid
     * @return SalespersonCommissions
     */
    public function setIsPaid($IsPaid)
    {
      $this->IsPaid = $IsPaid;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPosted()
    {
      return $this->IsPosted;
    }

    /**
     * @param boolean $IsPosted
     * @return SalespersonCommissions
     */
    public function setIsPosted($IsPosted)
    {
      $this->IsPosted = $IsPosted;
      return $this;
    }

    /**
     * @return SalespersonCommissionsKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param SalespersonCommissionsKey $Key
     * @return SalespersonCommissions
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getNoncommissionedAmount()
    {
      return $this->NoncommissionedAmount;
    }

    /**
     * @param MoneyAmount $NoncommissionedAmount
     * @return SalespersonCommissions
     */
    public function setNoncommissionedAmount($NoncommissionedAmount)
    {
      $this->NoncommissionedAmount = $NoncommissionedAmount;
      return $this;
    }

    /**
     * @return Percent
     */
    public function getPercentOfSale()
    {
      return $this->PercentOfSale;
    }

    /**
     * @param Percent $PercentOfSale
     * @return SalespersonCommissions
     */
    public function setPercentOfSale($PercentOfSale)
    {
      $this->PercentOfSale = $PercentOfSale;
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
     * @return SalespersonCommissions
     */
    public function setSalesAmount($SalesAmount)
    {
      $this->SalesAmount = $SalesAmount;
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
     * @return SalespersonCommissions
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
     * @return SalespersonCommissions
     */
    public function setSalespersonKey($SalespersonKey)
    {
      $this->SalespersonKey = $SalespersonKey;
      return $this;
    }

    /**
     * @return SalesCommissionTransactionState
     */
    public function getTransactionState()
    {
      return $this->TransactionState;
    }

    /**
     * @param SalesCommissionTransactionState $TransactionState
     * @return SalespersonCommissions
     */
    public function setTransactionState($TransactionState)
    {
      $this->TransactionState = $TransactionState;
      return $this;
    }

}
