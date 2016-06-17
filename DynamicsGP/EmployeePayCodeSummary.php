<?php

class EmployeePayCodeSummary
{

    /**
     * @var EmployeePayCodeKey $EmployeePayCodeKey
     */
    protected $EmployeePayCodeKey = null;

    /**
     * @var boolean $IsInactive
     */
    protected $IsInactive = null;

    /**
     * @var boolean $IsTaxable
     */
    protected $IsTaxable = null;

    /**
     * @var CompensationPeriod $PayPeriod
     */
    protected $PayPeriod = null;

    /**
     * @var float $PayRate
     */
    protected $PayRate = null;

    /**
     * @var EmployeePayTypes $PayType
     */
    protected $PayType = null;

    /**
     * @var string $PayUnit
     */
    protected $PayUnit = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return EmployeePayCodeKey
     */
    public function getEmployeePayCodeKey()
    {
      return $this->EmployeePayCodeKey;
    }

    /**
     * @param EmployeePayCodeKey $EmployeePayCodeKey
     * @return EmployeePayCodeSummary
     */
    public function setEmployeePayCodeKey($EmployeePayCodeKey)
    {
      $this->EmployeePayCodeKey = $EmployeePayCodeKey;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsInactive()
    {
      return $this->IsInactive;
    }

    /**
     * @param boolean $IsInactive
     * @return EmployeePayCodeSummary
     */
    public function setIsInactive($IsInactive)
    {
      $this->IsInactive = $IsInactive;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsTaxable()
    {
      return $this->IsTaxable;
    }

    /**
     * @param boolean $IsTaxable
     * @return EmployeePayCodeSummary
     */
    public function setIsTaxable($IsTaxable)
    {
      $this->IsTaxable = $IsTaxable;
      return $this;
    }

    /**
     * @return CompensationPeriod
     */
    public function getPayPeriod()
    {
      return $this->PayPeriod;
    }

    /**
     * @param CompensationPeriod $PayPeriod
     * @return EmployeePayCodeSummary
     */
    public function setPayPeriod($PayPeriod)
    {
      $this->PayPeriod = $PayPeriod;
      return $this;
    }

    /**
     * @return float
     */
    public function getPayRate()
    {
      return $this->PayRate;
    }

    /**
     * @param float $PayRate
     * @return EmployeePayCodeSummary
     */
    public function setPayRate($PayRate)
    {
      $this->PayRate = $PayRate;
      return $this;
    }

    /**
     * @return EmployeePayTypes
     */
    public function getPayType()
    {
      return $this->PayType;
    }

    /**
     * @param EmployeePayTypes $PayType
     * @return EmployeePayCodeSummary
     */
    public function setPayType($PayType)
    {
      $this->PayType = $PayType;
      return $this;
    }

    /**
     * @return string
     */
    public function getPayUnit()
    {
      return $this->PayUnit;
    }

    /**
     * @param string $PayUnit
     * @return EmployeePayCodeSummary
     */
    public function setPayUnit($PayUnit)
    {
      $this->PayUnit = $PayUnit;
      return $this;
    }

}
