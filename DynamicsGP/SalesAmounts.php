<?php

class SalesAmounts
{

    /**
     * @var int $AverageDaysToPay
     */
    protected $AverageDaysToPay = null;

    /**
     * @var MoneyAmount $HighBalance
     */
    protected $HighBalance = null;

    /**
     * @var int $NumberOfInvoices
     */
    protected $NumberOfInvoices = null;

    /**
     * @var MoneyAmount $TermsDiscountsTaken
     */
    protected $TermsDiscountsTaken = null;

    /**
     * @var MoneyAmount $TotalCashReceived
     */
    protected $TotalCashReceived = null;

    /**
     * @var MoneyAmount $TotalCost
     */
    protected $TotalCost = null;

    /**
     * @var MoneyAmount $TotalFinanceCharge
     */
    protected $TotalFinanceCharge = null;

    /**
     * @var MoneyAmount $TotalReturns
     */
    protected $TotalReturns = null;

    /**
     * @var MoneyAmount $TotalSales
     */
    protected $TotalSales = null;

    /**
     * @var MoneyAmount $TotalWaivedFinanceCharge
     */
    protected $TotalWaivedFinanceCharge = null;

    /**
     * @var MoneyAmount $TotalWriteoffAmount
     */
    protected $TotalWriteoffAmount = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getAverageDaysToPay()
    {
      return $this->AverageDaysToPay;
    }

    /**
     * @param int $AverageDaysToPay
     * @return SalesAmounts
     */
    public function setAverageDaysToPay($AverageDaysToPay)
    {
      $this->AverageDaysToPay = $AverageDaysToPay;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getHighBalance()
    {
      return $this->HighBalance;
    }

    /**
     * @param MoneyAmount $HighBalance
     * @return SalesAmounts
     */
    public function setHighBalance($HighBalance)
    {
      $this->HighBalance = $HighBalance;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfInvoices()
    {
      return $this->NumberOfInvoices;
    }

    /**
     * @param int $NumberOfInvoices
     * @return SalesAmounts
     */
    public function setNumberOfInvoices($NumberOfInvoices)
    {
      $this->NumberOfInvoices = $NumberOfInvoices;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getTermsDiscountsTaken()
    {
      return $this->TermsDiscountsTaken;
    }

    /**
     * @param MoneyAmount $TermsDiscountsTaken
     * @return SalesAmounts
     */
    public function setTermsDiscountsTaken($TermsDiscountsTaken)
    {
      $this->TermsDiscountsTaken = $TermsDiscountsTaken;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getTotalCashReceived()
    {
      return $this->TotalCashReceived;
    }

    /**
     * @param MoneyAmount $TotalCashReceived
     * @return SalesAmounts
     */
    public function setTotalCashReceived($TotalCashReceived)
    {
      $this->TotalCashReceived = $TotalCashReceived;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getTotalCost()
    {
      return $this->TotalCost;
    }

    /**
     * @param MoneyAmount $TotalCost
     * @return SalesAmounts
     */
    public function setTotalCost($TotalCost)
    {
      $this->TotalCost = $TotalCost;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getTotalFinanceCharge()
    {
      return $this->TotalFinanceCharge;
    }

    /**
     * @param MoneyAmount $TotalFinanceCharge
     * @return SalesAmounts
     */
    public function setTotalFinanceCharge($TotalFinanceCharge)
    {
      $this->TotalFinanceCharge = $TotalFinanceCharge;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getTotalReturns()
    {
      return $this->TotalReturns;
    }

    /**
     * @param MoneyAmount $TotalReturns
     * @return SalesAmounts
     */
    public function setTotalReturns($TotalReturns)
    {
      $this->TotalReturns = $TotalReturns;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getTotalSales()
    {
      return $this->TotalSales;
    }

    /**
     * @param MoneyAmount $TotalSales
     * @return SalesAmounts
     */
    public function setTotalSales($TotalSales)
    {
      $this->TotalSales = $TotalSales;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getTotalWaivedFinanceCharge()
    {
      return $this->TotalWaivedFinanceCharge;
    }

    /**
     * @param MoneyAmount $TotalWaivedFinanceCharge
     * @return SalesAmounts
     */
    public function setTotalWaivedFinanceCharge($TotalWaivedFinanceCharge)
    {
      $this->TotalWaivedFinanceCharge = $TotalWaivedFinanceCharge;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getTotalWriteoffAmount()
    {
      return $this->TotalWriteoffAmount;
    }

    /**
     * @param MoneyAmount $TotalWriteoffAmount
     * @return SalesAmounts
     */
    public function setTotalWriteoffAmount($TotalWriteoffAmount)
    {
      $this->TotalWriteoffAmount = $TotalWriteoffAmount;
      return $this;
    }

}
