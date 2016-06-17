<?php

class SalespersonHistoryKey extends ReferenceKey
{

    /**
     * @var int $Period
     */
    protected $Period = null;

    /**
     * @var SalespersonKey $SalespersonKey
     */
    protected $SalespersonKey = null;

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
     * @return SalespersonHistoryKey
     */
    public function setPeriod($Period)
    {
      $this->Period = $Period;
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
     * @return SalespersonHistoryKey
     */
    public function setSalespersonKey($SalespersonKey)
    {
      $this->SalespersonKey = $SalespersonKey;
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
     * @return SalespersonHistoryKey
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
     * @return SalespersonHistoryKey
     */
    public function setYear($Year)
    {
      $this->Year = $Year;
      return $this;
    }

}
