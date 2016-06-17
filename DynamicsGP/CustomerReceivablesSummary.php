<?php

class CustomerReceivablesSummary extends BusinessObject
{

    /**
     * @var AgingAmounts $Aging
     */
    protected $Aging = null;

    /**
     * @var CustomerKey $Key
     */
    protected $Key = null;

    /**
     * @var MoneyAmount $LastPaymentAmount
     */
    protected $LastPaymentAmount = null;

    /**
     * @var \DateTime $LastPaymentDate
     */
    protected $LastPaymentDate = null;

    /**
     * @var MoneyAmount $LastStatementAmount
     */
    protected $LastStatementAmount = null;

    /**
     * @var \DateTime $LastStatementDate
     */
    protected $LastStatementDate = null;

    /**
     * @var MoneyAmount $LastTransactionAmount
     */
    protected $LastTransactionAmount = null;

    /**
     * @var \DateTime $LastTransactionDate
     */
    protected $LastTransactionDate = null;

    /**
     * @var SalesAmounts $LastYear
     */
    protected $LastYear = null;

    /**
     * @var SalesAmounts $LifeToDate
     */
    protected $LifeToDate = null;

    /**
     * @var MoneyAmount $OnOrderAmount
     */
    protected $OnOrderAmount = null;

    /**
     * @var SalesAmounts $YearToDate
     */
    protected $YearToDate = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return AgingAmounts
     */
    public function getAging()
    {
      return $this->Aging;
    }

    /**
     * @param AgingAmounts $Aging
     * @return CustomerReceivablesSummary
     */
    public function setAging($Aging)
    {
      $this->Aging = $Aging;
      return $this;
    }

    /**
     * @return CustomerKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param CustomerKey $Key
     * @return CustomerReceivablesSummary
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getLastPaymentAmount()
    {
      return $this->LastPaymentAmount;
    }

    /**
     * @param MoneyAmount $LastPaymentAmount
     * @return CustomerReceivablesSummary
     */
    public function setLastPaymentAmount($LastPaymentAmount)
    {
      $this->LastPaymentAmount = $LastPaymentAmount;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastPaymentDate()
    {
      if ($this->LastPaymentDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastPaymentDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastPaymentDate
     * @return CustomerReceivablesSummary
     */
    public function setLastPaymentDate(\DateTime $LastPaymentDate = null)
    {
      if ($LastPaymentDate == null) {
       $this->LastPaymentDate = null;
      } else {
        $this->LastPaymentDate = $LastPaymentDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getLastStatementAmount()
    {
      return $this->LastStatementAmount;
    }

    /**
     * @param MoneyAmount $LastStatementAmount
     * @return CustomerReceivablesSummary
     */
    public function setLastStatementAmount($LastStatementAmount)
    {
      $this->LastStatementAmount = $LastStatementAmount;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastStatementDate()
    {
      if ($this->LastStatementDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastStatementDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastStatementDate
     * @return CustomerReceivablesSummary
     */
    public function setLastStatementDate(\DateTime $LastStatementDate = null)
    {
      if ($LastStatementDate == null) {
       $this->LastStatementDate = null;
      } else {
        $this->LastStatementDate = $LastStatementDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getLastTransactionAmount()
    {
      return $this->LastTransactionAmount;
    }

    /**
     * @param MoneyAmount $LastTransactionAmount
     * @return CustomerReceivablesSummary
     */
    public function setLastTransactionAmount($LastTransactionAmount)
    {
      $this->LastTransactionAmount = $LastTransactionAmount;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastTransactionDate()
    {
      if ($this->LastTransactionDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastTransactionDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastTransactionDate
     * @return CustomerReceivablesSummary
     */
    public function setLastTransactionDate(\DateTime $LastTransactionDate = null)
    {
      if ($LastTransactionDate == null) {
       $this->LastTransactionDate = null;
      } else {
        $this->LastTransactionDate = $LastTransactionDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return SalesAmounts
     */
    public function getLastYear()
    {
      return $this->LastYear;
    }

    /**
     * @param SalesAmounts $LastYear
     * @return CustomerReceivablesSummary
     */
    public function setLastYear($LastYear)
    {
      $this->LastYear = $LastYear;
      return $this;
    }

    /**
     * @return SalesAmounts
     */
    public function getLifeToDate()
    {
      return $this->LifeToDate;
    }

    /**
     * @param SalesAmounts $LifeToDate
     * @return CustomerReceivablesSummary
     */
    public function setLifeToDate($LifeToDate)
    {
      $this->LifeToDate = $LifeToDate;
      return $this;
    }

    /**
     * @return MoneyAmount
     */
    public function getOnOrderAmount()
    {
      return $this->OnOrderAmount;
    }

    /**
     * @param MoneyAmount $OnOrderAmount
     * @return CustomerReceivablesSummary
     */
    public function setOnOrderAmount($OnOrderAmount)
    {
      $this->OnOrderAmount = $OnOrderAmount;
      return $this;
    }

    /**
     * @return SalesAmounts
     */
    public function getYearToDate()
    {
      return $this->YearToDate;
    }

    /**
     * @param SalesAmounts $YearToDate
     * @return CustomerReceivablesSummary
     */
    public function setYearToDate($YearToDate)
    {
      $this->YearToDate = $YearToDate;
      return $this;
    }

}
