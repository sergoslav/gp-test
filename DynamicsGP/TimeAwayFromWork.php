<?php

class TimeAwayFromWork
{

    /**
     * @var Quantity $AccrualAmount
     */
    protected $AccrualAmount = null;

    /**
     * @var TimeAwayFromWorkAccrualMethod $AccrualMethod
     */
    protected $AccrualMethod = null;

    /**
     * @var boolean $DoesAutomaticallyAccrue
     */
    protected $DoesAutomaticallyAccrue = null;

    /**
     * @var Quantity $HoursAvailable
     */
    protected $HoursAvailable = null;

    /**
     * @var int $HoursPerYear
     */
    protected $HoursPerYear = null;

    /**
     * @var boolean $WarnWhenHoursAvailableFallsBelowZero
     */
    protected $WarnWhenHoursAvailableFallsBelowZero = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Quantity
     */
    public function getAccrualAmount()
    {
      return $this->AccrualAmount;
    }

    /**
     * @param Quantity $AccrualAmount
     * @return TimeAwayFromWork
     */
    public function setAccrualAmount($AccrualAmount)
    {
      $this->AccrualAmount = $AccrualAmount;
      return $this;
    }

    /**
     * @return TimeAwayFromWorkAccrualMethod
     */
    public function getAccrualMethod()
    {
      return $this->AccrualMethod;
    }

    /**
     * @param TimeAwayFromWorkAccrualMethod $AccrualMethod
     * @return TimeAwayFromWork
     */
    public function setAccrualMethod($AccrualMethod)
    {
      $this->AccrualMethod = $AccrualMethod;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDoesAutomaticallyAccrue()
    {
      return $this->DoesAutomaticallyAccrue;
    }

    /**
     * @param boolean $DoesAutomaticallyAccrue
     * @return TimeAwayFromWork
     */
    public function setDoesAutomaticallyAccrue($DoesAutomaticallyAccrue)
    {
      $this->DoesAutomaticallyAccrue = $DoesAutomaticallyAccrue;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getHoursAvailable()
    {
      return $this->HoursAvailable;
    }

    /**
     * @param Quantity $HoursAvailable
     * @return TimeAwayFromWork
     */
    public function setHoursAvailable($HoursAvailable)
    {
      $this->HoursAvailable = $HoursAvailable;
      return $this;
    }

    /**
     * @return int
     */
    public function getHoursPerYear()
    {
      return $this->HoursPerYear;
    }

    /**
     * @param int $HoursPerYear
     * @return TimeAwayFromWork
     */
    public function setHoursPerYear($HoursPerYear)
    {
      $this->HoursPerYear = $HoursPerYear;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getWarnWhenHoursAvailableFallsBelowZero()
    {
      return $this->WarnWhenHoursAvailableFallsBelowZero;
    }

    /**
     * @param boolean $WarnWhenHoursAvailableFallsBelowZero
     * @return TimeAwayFromWork
     */
    public function setWarnWhenHoursAvailableFallsBelowZero($WarnWhenHoursAvailableFallsBelowZero)
    {
      $this->WarnWhenHoursAvailableFallsBelowZero = $WarnWhenHoursAvailableFallsBelowZero;
      return $this;
    }

}
