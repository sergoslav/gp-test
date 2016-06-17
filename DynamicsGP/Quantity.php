<?php

class Quantity extends Amount
{

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
     * @return int
     */
    public function getDecimalDigits()
    {
      return $this->DecimalDigits;
    }

    /**
     * @param int $DecimalDigits
     * @return Quantity
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
     * @return Quantity
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
