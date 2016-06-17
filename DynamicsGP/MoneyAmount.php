<?php

class MoneyAmount extends Amount
{

    /**
     * @var string $Currency
     */
    protected $Currency = null;

    /**
     * @var int $DecimalDigits
     */
    protected $DecimalDigits = null;

    /**
     * @var float $Value
     */
    protected $Value = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
      return $this->Currency;
    }

    /**
     * @param string $Currency
     * @return MoneyAmount
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
      return $this;
    }

    /**
     * @return int
     */
    public function getDecimalDigits()
    {
      return $this->DecimalDigits;
    }

    /**
     * @param int $DecimalDigits
     * @return MoneyAmount
     */
    public function setDecimalDigits($DecimalDigits)
    {
      $this->DecimalDigits = $DecimalDigits;
      return $this;
    }

    /**
     * @return float
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param float $Value
     * @return MoneyAmount
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
