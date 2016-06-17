<?php

class SalesCommission extends BusinessObject
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
     * @var MoneyAmount $CommissionSaleAmount
     */
    protected $CommissionSaleAmount = null;

    /**
     * @var SalesCommissionKey $Key
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
     * @return SalesCommission
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
     * @return SalesCommission
     */
    public function setCommissionPercent($CommissionPercent)
    {
      $this->CommissionPercent = $CommissionPercent;
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
     * @return SalesCommission
     */
    public function setCommissionSaleAmount($CommissionSaleAmount)
    {
      $this->CommissionSaleAmount = $CommissionSaleAmount;
      return $this;
    }

    /**
     * @return SalesCommissionKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param SalesCommissionKey $Key
     * @return SalesCommission
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
     * @return SalesCommission
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
     * @return SalesCommission
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
     * @return SalesCommission
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
     * @return SalesCommission
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
     * @return SalesCommission
     */
    public function setSalespersonKey($SalespersonKey)
    {
      $this->SalespersonKey = $SalespersonKey;
      return $this;
    }

}
