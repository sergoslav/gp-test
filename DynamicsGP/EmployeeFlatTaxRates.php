<?php

class EmployeeFlatTaxRates
{

    /**
     * @var float $Federal
     */
    protected $Federal = null;

    /**
     * @var float $State
     */
    protected $State = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return float
     */
    public function getFederal()
    {
      return $this->Federal;
    }

    /**
     * @param float $Federal
     * @return EmployeeFlatTaxRates
     */
    public function setFederal($Federal)
    {
      $this->Federal = $Federal;
      return $this;
    }

    /**
     * @return float
     */
    public function getState()
    {
      return $this->State;
    }

    /**
     * @param float $State
     * @return EmployeeFlatTaxRates
     */
    public function setState($State)
    {
      $this->State = $State;
      return $this;
    }

}
