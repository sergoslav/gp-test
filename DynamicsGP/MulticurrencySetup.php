<?php

class MulticurrencySetup extends BusinessObject
{

    /**
     * @var boolean $AllowModifyRates
     */
    protected $AllowModifyRates = null;

    /**
     * @var boolean $AllowNewRates
     */
    protected $AllowNewRates = null;

    /**
     * @var boolean $AllowOverrideExchangeRates
     */
    protected $AllowOverrideExchangeRates = null;

    /**
     * @var boolean $AllowOverrideRateVariance
     */
    protected $AllowOverrideRateVariance = null;

    /**
     * @var boolean $AllowOverrideReportingRate
     */
    protected $AllowOverrideReportingRate = null;

    /**
     * @var RateCalculation $AverageExchangeRateCalculationMethodDisplay
     */
    protected $AverageExchangeRateCalculationMethodDisplay = null;

    /**
     * @var RateTypeKey $DefaultFinancialRateTypeKey
     */
    protected $DefaultFinancialRateTypeKey = null;

    /**
     * @var RateTypeKey $DefaultPurchasingRateTypeKey
     */
    protected $DefaultPurchasingRateTypeKey = null;

    /**
     * @var RateTypeKey $DefaultSalesRateTypeKey
     */
    protected $DefaultSalesRateTypeKey = null;

    /**
     * @var boolean $KeepGeneralLedgerAccountHistory
     */
    protected $KeepGeneralLedgerAccountHistory = null;

    /**
     * @var MulticurrencySetupKey $Key
     */
    protected $Key = null;

    /**
     * @var \DateTime $LastFinancialRevaluationDate
     */
    protected $LastFinancialRevaluationDate = null;

    /**
     * @var \DateTime $LastPurchasingRevaluationDate
     */
    protected $LastPurchasingRevaluationDate = null;

    /**
     * @var \DateTime $LastSalesRevaluationDate
     */
    protected $LastSalesRevaluationDate = null;

    /**
     * @var \DateTime $LastSummaryRemovalDate
     */
    protected $LastSummaryRemovalDate = null;

    /**
     * @var \DateTime $LastTransactionRemovalDate
     */
    protected $LastTransactionRemovalDate = null;

    /**
     * @var float $ReportingCurrencyExchangeRate
     */
    protected $ReportingCurrencyExchangeRate = null;

    /**
     * @var CurrencyKey $ReportingCurrencyKey
     */
    protected $ReportingCurrencyKey = null;

    /**
     * @var RateCalculation $ReportingCurrencyRateCalculationMethod
     */
    protected $ReportingCurrencyRateCalculationMethod = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return boolean
     */
    public function getAllowModifyRates()
    {
      return $this->AllowModifyRates;
    }

    /**
     * @param boolean $AllowModifyRates
     * @return MulticurrencySetup
     */
    public function setAllowModifyRates($AllowModifyRates)
    {
      $this->AllowModifyRates = $AllowModifyRates;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowNewRates()
    {
      return $this->AllowNewRates;
    }

    /**
     * @param boolean $AllowNewRates
     * @return MulticurrencySetup
     */
    public function setAllowNewRates($AllowNewRates)
    {
      $this->AllowNewRates = $AllowNewRates;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowOverrideExchangeRates()
    {
      return $this->AllowOverrideExchangeRates;
    }

    /**
     * @param boolean $AllowOverrideExchangeRates
     * @return MulticurrencySetup
     */
    public function setAllowOverrideExchangeRates($AllowOverrideExchangeRates)
    {
      $this->AllowOverrideExchangeRates = $AllowOverrideExchangeRates;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowOverrideRateVariance()
    {
      return $this->AllowOverrideRateVariance;
    }

    /**
     * @param boolean $AllowOverrideRateVariance
     * @return MulticurrencySetup
     */
    public function setAllowOverrideRateVariance($AllowOverrideRateVariance)
    {
      $this->AllowOverrideRateVariance = $AllowOverrideRateVariance;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowOverrideReportingRate()
    {
      return $this->AllowOverrideReportingRate;
    }

    /**
     * @param boolean $AllowOverrideReportingRate
     * @return MulticurrencySetup
     */
    public function setAllowOverrideReportingRate($AllowOverrideReportingRate)
    {
      $this->AllowOverrideReportingRate = $AllowOverrideReportingRate;
      return $this;
    }

    /**
     * @return RateCalculation
     */
    public function getAverageExchangeRateCalculationMethodDisplay()
    {
      return $this->AverageExchangeRateCalculationMethodDisplay;
    }

    /**
     * @param RateCalculation $AverageExchangeRateCalculationMethodDisplay
     * @return MulticurrencySetup
     */
    public function setAverageExchangeRateCalculationMethodDisplay($AverageExchangeRateCalculationMethodDisplay)
    {
      $this->AverageExchangeRateCalculationMethodDisplay = $AverageExchangeRateCalculationMethodDisplay;
      return $this;
    }

    /**
     * @return RateTypeKey
     */
    public function getDefaultFinancialRateTypeKey()
    {
      return $this->DefaultFinancialRateTypeKey;
    }

    /**
     * @param RateTypeKey $DefaultFinancialRateTypeKey
     * @return MulticurrencySetup
     */
    public function setDefaultFinancialRateTypeKey($DefaultFinancialRateTypeKey)
    {
      $this->DefaultFinancialRateTypeKey = $DefaultFinancialRateTypeKey;
      return $this;
    }

    /**
     * @return RateTypeKey
     */
    public function getDefaultPurchasingRateTypeKey()
    {
      return $this->DefaultPurchasingRateTypeKey;
    }

    /**
     * @param RateTypeKey $DefaultPurchasingRateTypeKey
     * @return MulticurrencySetup
     */
    public function setDefaultPurchasingRateTypeKey($DefaultPurchasingRateTypeKey)
    {
      $this->DefaultPurchasingRateTypeKey = $DefaultPurchasingRateTypeKey;
      return $this;
    }

    /**
     * @return RateTypeKey
     */
    public function getDefaultSalesRateTypeKey()
    {
      return $this->DefaultSalesRateTypeKey;
    }

    /**
     * @param RateTypeKey $DefaultSalesRateTypeKey
     * @return MulticurrencySetup
     */
    public function setDefaultSalesRateTypeKey($DefaultSalesRateTypeKey)
    {
      $this->DefaultSalesRateTypeKey = $DefaultSalesRateTypeKey;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getKeepGeneralLedgerAccountHistory()
    {
      return $this->KeepGeneralLedgerAccountHistory;
    }

    /**
     * @param boolean $KeepGeneralLedgerAccountHistory
     * @return MulticurrencySetup
     */
    public function setKeepGeneralLedgerAccountHistory($KeepGeneralLedgerAccountHistory)
    {
      $this->KeepGeneralLedgerAccountHistory = $KeepGeneralLedgerAccountHistory;
      return $this;
    }

    /**
     * @return MulticurrencySetupKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param MulticurrencySetupKey $Key
     * @return MulticurrencySetup
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastFinancialRevaluationDate()
    {
      if ($this->LastFinancialRevaluationDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastFinancialRevaluationDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastFinancialRevaluationDate
     * @return MulticurrencySetup
     */
    public function setLastFinancialRevaluationDate(\DateTime $LastFinancialRevaluationDate = null)
    {
      if ($LastFinancialRevaluationDate == null) {
       $this->LastFinancialRevaluationDate = null;
      } else {
        $this->LastFinancialRevaluationDate = $LastFinancialRevaluationDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastPurchasingRevaluationDate()
    {
      if ($this->LastPurchasingRevaluationDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastPurchasingRevaluationDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastPurchasingRevaluationDate
     * @return MulticurrencySetup
     */
    public function setLastPurchasingRevaluationDate(\DateTime $LastPurchasingRevaluationDate = null)
    {
      if ($LastPurchasingRevaluationDate == null) {
       $this->LastPurchasingRevaluationDate = null;
      } else {
        $this->LastPurchasingRevaluationDate = $LastPurchasingRevaluationDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastSalesRevaluationDate()
    {
      if ($this->LastSalesRevaluationDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastSalesRevaluationDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastSalesRevaluationDate
     * @return MulticurrencySetup
     */
    public function setLastSalesRevaluationDate(\DateTime $LastSalesRevaluationDate = null)
    {
      if ($LastSalesRevaluationDate == null) {
       $this->LastSalesRevaluationDate = null;
      } else {
        $this->LastSalesRevaluationDate = $LastSalesRevaluationDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastSummaryRemovalDate()
    {
      if ($this->LastSummaryRemovalDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastSummaryRemovalDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastSummaryRemovalDate
     * @return MulticurrencySetup
     */
    public function setLastSummaryRemovalDate(\DateTime $LastSummaryRemovalDate = null)
    {
      if ($LastSummaryRemovalDate == null) {
       $this->LastSummaryRemovalDate = null;
      } else {
        $this->LastSummaryRemovalDate = $LastSummaryRemovalDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastTransactionRemovalDate()
    {
      if ($this->LastTransactionRemovalDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastTransactionRemovalDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastTransactionRemovalDate
     * @return MulticurrencySetup
     */
    public function setLastTransactionRemovalDate(\DateTime $LastTransactionRemovalDate = null)
    {
      if ($LastTransactionRemovalDate == null) {
       $this->LastTransactionRemovalDate = null;
      } else {
        $this->LastTransactionRemovalDate = $LastTransactionRemovalDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return float
     */
    public function getReportingCurrencyExchangeRate()
    {
      return $this->ReportingCurrencyExchangeRate;
    }

    /**
     * @param float $ReportingCurrencyExchangeRate
     * @return MulticurrencySetup
     */
    public function setReportingCurrencyExchangeRate($ReportingCurrencyExchangeRate)
    {
      $this->ReportingCurrencyExchangeRate = $ReportingCurrencyExchangeRate;
      return $this;
    }

    /**
     * @return CurrencyKey
     */
    public function getReportingCurrencyKey()
    {
      return $this->ReportingCurrencyKey;
    }

    /**
     * @param CurrencyKey $ReportingCurrencyKey
     * @return MulticurrencySetup
     */
    public function setReportingCurrencyKey($ReportingCurrencyKey)
    {
      $this->ReportingCurrencyKey = $ReportingCurrencyKey;
      return $this;
    }

    /**
     * @return RateCalculation
     */
    public function getReportingCurrencyRateCalculationMethod()
    {
      return $this->ReportingCurrencyRateCalculationMethod;
    }

    /**
     * @param RateCalculation $ReportingCurrencyRateCalculationMethod
     * @return MulticurrencySetup
     */
    public function setReportingCurrencyRateCalculationMethod($ReportingCurrencyRateCalculationMethod)
    {
      $this->ReportingCurrencyRateCalculationMethod = $ReportingCurrencyRateCalculationMethod;
      return $this;
    }

}
