<?php

class ProjectBudgetForecast extends ProjectBudgetBase
{

    /**
     * @var MoneyAmount $NetProfitAmount
     */
    protected $NetProfitAmount = null;

    /**
     * @var Percent $OverheadPercent
     */
    protected $OverheadPercent = null;

    /**
     * @var Percent $ProfitPercent
     */
    protected $ProfitPercent = null;

    /**
     * @var ProjectTaxBasis $PurchaseTaxBasis
     */
    protected $PurchaseTaxBasis = null;

    /**
     * @var TaxScheduleKey $PurchaseTaxScheduleKey
     */
    protected $PurchaseTaxScheduleKey = null;

    /**
     * @var SalesTaxBasis $SalesTaxBasis
     */
    protected $SalesTaxBasis = null;

    /**
     * @var TaxScheduleKey $SalesTaxScheduleKey
     */
    protected $SalesTaxScheduleKey = null;

    /**
     * @var MoneyAmount $UnitCost
     */
    protected $UnitCost = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return MoneyAmount
     */
    public function getNetProfitAmount()
    {
      return $this->NetProfitAmount;
    }

    /**
     * @param MoneyAmount $NetProfitAmount
     * @return ProjectBudgetForecast
     */
    public function setNetProfitAmount($NetProfitAmount)
    {
      $this->NetProfitAmount = $NetProfitAmount;
      return $this;
    }

    /**
     * @return Percent
     */
    public function getOverheadPercent()
    {
      return $this->OverheadPercent;
    }

    /**
     * @param Percent $OverheadPercent
     * @return ProjectBudgetForecast
     */
    public function setOverheadPercent($OverheadPercent)
    {
      $this->OverheadPercent = $OverheadPercent;
      return $this;
    }

    /**
     * @return Percent
     */
    public function getProfitPercent()
    {
      return $this->ProfitPercent;
    }

    /**
     * @param Percent $ProfitPercent
     * @return ProjectBudgetForecast
     */
    public function setProfitPercent($ProfitPercent)
    {
      $this->ProfitPercent = $ProfitPercent;
      return $this;
    }

    /**
     * @return ProjectTaxBasis
     */
    public function getPurchaseTaxBasis()
    {
      return $this->PurchaseTaxBasis;
    }

    /**
     * @param ProjectTaxBasis $PurchaseTaxBasis
     * @return ProjectBudgetForecast
     */
    public function setPurchaseTaxBasis($PurchaseTaxBasis)
    {
      $this->PurchaseTaxBasis = $PurchaseTaxBasis;
      return $this;
    }

    /**
     * @return TaxScheduleKey
     */
    public function getPurchaseTaxScheduleKey()
    {
      return $this->PurchaseTaxScheduleKey;
    }

    /**
     * @param TaxScheduleKey $PurchaseTaxScheduleKey
     * @return ProjectBudgetForecast
     */
    public function setPurchaseTaxScheduleKey($PurchaseTaxScheduleKey)
    {
      $this->PurchaseTaxScheduleKey = $PurchaseTaxScheduleKey;
      return $this;
    }

    /**
     * @return SalesTaxBasis
     */
    public function getSalesTaxBasis()
    {
      return $this->SalesTaxBasis;
    }

    /**
     * @param SalesTaxBasis $SalesTaxBasis
     * @return ProjectBudgetForecast
     */
    public function setSalesTaxBasis($SalesTaxBasis)
    {
      $this->SalesTaxBasis = $SalesTaxBasis;
      return $this;
    }

    /**
     * @return TaxScheduleKey
     */
    public function getSalesTaxScheduleKey()
    {
      return $this->SalesTaxScheduleKey;
    }

    /**
     * @param TaxScheduleKey $SalesTaxScheduleKey
     * @return ProjectBudgetForecast
     */
    public function setSalesTaxScheduleKey($SalesTaxScheduleKey)
    {
      $this->SalesTaxScheduleKey = $SalesTaxScheduleKey;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getUnitCost()
    {
      return $this->UnitCost;
    }

    /**
     * @param MoneyAmount $UnitCost
     * @return ProjectBudgetForecast
     */
    public function setUnitCost($UnitCost)
    {
      $this->UnitCost = $UnitCost;
      return $this;
    }

}
