<?php

class ReceivablesCommission extends BusinessObject
{

    /**
     * @var MoneyAmount $CommissionAmount
     */
    protected $CommissionAmount = null;

    /**
     * @var Percent $CommissionPercent
     */
    protected $CommissionPercent = null;

    /**
     * @var ReceivablesCommissionKey $Key
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

    
    public function __construct()
    {
      parent::__construct();
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
     * @return ReceivablesCommission
     */
    public function setCommissionAmount($CommissionAmount)
    {
      $this->CommissionAmount = $CommissionAmount;
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
     * @return ReceivablesCommission
     */
    public function setCommissionPercent($CommissionPercent)
    {
      $this->CommissionPercent = $CommissionPercent;
      return $this;
    }

    /**
     * @return ReceivablesCommissionKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param ReceivablesCommissionKey $Key
     * @return ReceivablesCommission
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
     * @return ReceivablesCommission
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
     * @return ReceivablesCommission
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
     * @return ReceivablesCommission
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
     * @return ReceivablesCommission
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
     * @return ReceivablesCommission
     */
    public function setSalespersonKey($SalespersonKey)
    {
      $this->SalespersonKey = $SalespersonKey;
      return $this;
    }

}
