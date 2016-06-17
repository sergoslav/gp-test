<?php

class SalesSummary extends BusinessObject
{

    /**
     * @var CommissionSummary $LastYear
     */
    protected $LastYear = null;

    /**
     * @var CommissionSummary $YearToDate
     */
    protected $YearToDate = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return CommissionSummary
     */
    public function getLastYear()
    {
      return $this->LastYear;
    }

    /**
     * @param CommissionSummary $LastYear
     * @return SalesSummary
     */
    public function setLastYear($LastYear)
    {
      $this->LastYear = $LastYear;
      return $this;
    }

    /**
     * @return CommissionSummary
     */
    public function getYearToDate()
    {
      return $this->YearToDate;
    }

    /**
     * @param CommissionSummary $YearToDate
     * @return SalesSummary
     */
    public function setYearToDate($YearToDate)
    {
      $this->YearToDate = $YearToDate;
      return $this;
    }

}
