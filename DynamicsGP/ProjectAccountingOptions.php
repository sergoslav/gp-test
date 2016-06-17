<?php

class ProjectAccountingOptions
{

    /**
     * @var CostPlus $CostPlus
     */
    protected $CostPlus = null;

    /**
     * @var PurchaseOrderFormat $DefaultPurchaseOrderFormat
     */
    protected $DefaultPurchaseOrderFormat = null;

    /**
     * @var FixedPrice $FixedPrice
     */
    protected $FixedPrice = null;

    /**
     * @var TimeAndMaterial $TimeAndMaterial
     */
    protected $TimeAndMaterial = null;

    /**
     * @var MoneyAmount $UnitCost
     */
    protected $UnitCost = null;

    /**
     * @var string $UnitOfMeasure
     */
    protected $UnitOfMeasure = null;

    /**
     * @var string $UserDefined1
     */
    protected $UserDefined1 = null;

    /**
     * @var string $UserDefined2
     */
    protected $UserDefined2 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CostPlus
     */
    public function getCostPlus()
    {
      return $this->CostPlus;
    }

    /**
     * @param CostPlus $CostPlus
     * @return ProjectAccountingOptions
     */
    public function setCostPlus($CostPlus)
    {
      $this->CostPlus = $CostPlus;
      return $this;
    }

    /**
     * @return PurchaseOrderFormat
     */
    public function getDefaultPurchaseOrderFormat()
    {
      return $this->DefaultPurchaseOrderFormat;
    }

    /**
     * @param PurchaseOrderFormat $DefaultPurchaseOrderFormat
     * @return ProjectAccountingOptions
     */
    public function setDefaultPurchaseOrderFormat($DefaultPurchaseOrderFormat)
    {
      $this->DefaultPurchaseOrderFormat = $DefaultPurchaseOrderFormat;
      return $this;
    }

    /**
     * @return FixedPrice
     */
    public function getFixedPrice()
    {
      return $this->FixedPrice;
    }

    /**
     * @param FixedPrice $FixedPrice
     * @return ProjectAccountingOptions
     */
    public function setFixedPrice($FixedPrice)
    {
      $this->FixedPrice = $FixedPrice;
      return $this;
    }

    /**
     * @return TimeAndMaterial
     */
    public function getTimeAndMaterial()
    {
      return $this->TimeAndMaterial;
    }

    /**
     * @param TimeAndMaterial $TimeAndMaterial
     * @return ProjectAccountingOptions
     */
    public function setTimeAndMaterial($TimeAndMaterial)
    {
      $this->TimeAndMaterial = $TimeAndMaterial;
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
     * @return ProjectAccountingOptions
     */
    public function setUnitCost($UnitCost)
    {
      $this->UnitCost = $UnitCost;
      return $this;
    }

    /**
     * @return string
     */
    public function getUnitOfMeasure()
    {
      return $this->UnitOfMeasure;
    }

    /**
     * @param string $UnitOfMeasure
     * @return ProjectAccountingOptions
     */
    public function setUnitOfMeasure($UnitOfMeasure)
    {
      $this->UnitOfMeasure = $UnitOfMeasure;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserDefined1()
    {
      return $this->UserDefined1;
    }

    /**
     * @param string $UserDefined1
     * @return ProjectAccountingOptions
     */
    public function setUserDefined1($UserDefined1)
    {
      $this->UserDefined1 = $UserDefined1;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserDefined2()
    {
      return $this->UserDefined2;
    }

    /**
     * @param string $UserDefined2
     * @return ProjectAccountingOptions
     */
    public function setUserDefined2($UserDefined2)
    {
      $this->UserDefined2 = $UserDefined2;
      return $this;
    }

}
