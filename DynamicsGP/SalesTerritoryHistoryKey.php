<?php

class SalesTerritoryHistoryKey extends ReferenceKey
{

    /**
     * @var int $Period
     */
    protected $Period = null;

    /**
     * @var SalesTerritoryKey $SalesTerritoryKey
     */
    protected $SalesTerritoryKey = null;

    /**
     * @var SalesSummaryType $SummaryType
     */
    protected $SummaryType = null;

    /**
     * @var int $Year
     */
    protected $Year = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return int
     */
    public function getPeriod()
    {
      return $this->Period;
    }

    /**
     * @param int $Period
     * @return SalesTerritoryHistoryKey
     */
    public function setPeriod($Period)
    {
      $this->Period = $Period;
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
     * @return SalesTerritoryHistoryKey
     */
    public function setSalesTerritoryKey($SalesTerritoryKey)
    {
      $this->SalesTerritoryKey = $SalesTerritoryKey;
      return $this;
    }

    /**
     * @return SalesSummaryType
     */
    public function getSummaryType()
    {
      return $this->SummaryType;
    }

    /**
     * @param SalesSummaryType $SummaryType
     * @return SalesTerritoryHistoryKey
     */
    public function setSummaryType($SummaryType)
    {
      $this->SummaryType = $SummaryType;
      return $this;
    }

    /**
     * @return int
     */
    public function getYear()
    {
      return $this->Year;
    }

    /**
     * @param int $Year
     * @return SalesTerritoryHistoryKey
     */
    public function setYear($Year)
    {
      $this->Year = $Year;
      return $this;
    }

}
