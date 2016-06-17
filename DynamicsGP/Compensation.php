<?php

class Compensation extends BusinessObject
{

    /**
     * @var float $CompensationAmount
     */
    protected $CompensationAmount = null;

    /**
     * @var CompensationPeriod $CompensationPeriod
     */
    protected $CompensationPeriod = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return float
     */
    public function getCompensationAmount()
    {
      return $this->CompensationAmount;
    }

    /**
     * @param float $CompensationAmount
     * @return Compensation
     */
    public function setCompensationAmount($CompensationAmount)
    {
      $this->CompensationAmount = $CompensationAmount;
      return $this;
    }

    /**
     * @return CompensationPeriod
     */
    public function getCompensationPeriod()
    {
      return $this->CompensationPeriod;
    }

    /**
     * @param CompensationPeriod $CompensationPeriod
     * @return Compensation
     */
    public function setCompensationPeriod($CompensationPeriod)
    {
      $this->CompensationPeriod = $CompensationPeriod;
      return $this;
    }

}
