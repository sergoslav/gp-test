<?php

class EmployeeApplicableTaxes
{

    /**
     * @var boolean $IsFederalTaxApplied
     */
    protected $IsFederalTaxApplied = null;

    /**
     * @var boolean $IsFutaApplied
     */
    protected $IsFutaApplied = null;

    /**
     * @var boolean $IsLocalTaxApplied
     */
    protected $IsLocalTaxApplied = null;

    /**
     * @var boolean $IsMedicareApplied
     */
    protected $IsMedicareApplied = null;

    /**
     * @var boolean $IsSocialSecurityApplied
     */
    protected $IsSocialSecurityApplied = null;

    /**
     * @var boolean $IsStateTaxApplied
     */
    protected $IsStateTaxApplied = null;

    /**
     * @var boolean $IsSutaApplied
     */
    protected $IsSutaApplied = null;

    /**
     * @var string $SutaState
     */
    protected $SutaState = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getIsFederalTaxApplied()
    {
      return $this->IsFederalTaxApplied;
    }

    /**
     * @param boolean $IsFederalTaxApplied
     * @return EmployeeApplicableTaxes
     */
    public function setIsFederalTaxApplied($IsFederalTaxApplied)
    {
      $this->IsFederalTaxApplied = $IsFederalTaxApplied;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsFutaApplied()
    {
      return $this->IsFutaApplied;
    }

    /**
     * @param boolean $IsFutaApplied
     * @return EmployeeApplicableTaxes
     */
    public function setIsFutaApplied($IsFutaApplied)
    {
      $this->IsFutaApplied = $IsFutaApplied;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsLocalTaxApplied()
    {
      return $this->IsLocalTaxApplied;
    }

    /**
     * @param boolean $IsLocalTaxApplied
     * @return EmployeeApplicableTaxes
     */
    public function setIsLocalTaxApplied($IsLocalTaxApplied)
    {
      $this->IsLocalTaxApplied = $IsLocalTaxApplied;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsMedicareApplied()
    {
      return $this->IsMedicareApplied;
    }

    /**
     * @param boolean $IsMedicareApplied
     * @return EmployeeApplicableTaxes
     */
    public function setIsMedicareApplied($IsMedicareApplied)
    {
      $this->IsMedicareApplied = $IsMedicareApplied;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSocialSecurityApplied()
    {
      return $this->IsSocialSecurityApplied;
    }

    /**
     * @param boolean $IsSocialSecurityApplied
     * @return EmployeeApplicableTaxes
     */
    public function setIsSocialSecurityApplied($IsSocialSecurityApplied)
    {
      $this->IsSocialSecurityApplied = $IsSocialSecurityApplied;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsStateTaxApplied()
    {
      return $this->IsStateTaxApplied;
    }

    /**
     * @param boolean $IsStateTaxApplied
     * @return EmployeeApplicableTaxes
     */
    public function setIsStateTaxApplied($IsStateTaxApplied)
    {
      $this->IsStateTaxApplied = $IsStateTaxApplied;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSutaApplied()
    {
      return $this->IsSutaApplied;
    }

    /**
     * @param boolean $IsSutaApplied
     * @return EmployeeApplicableTaxes
     */
    public function setIsSutaApplied($IsSutaApplied)
    {
      $this->IsSutaApplied = $IsSutaApplied;
      return $this;
    }

    /**
     * @return string
     */
    public function getSutaState()
    {
      return $this->SutaState;
    }

    /**
     * @param string $SutaState
     * @return EmployeeApplicableTaxes
     */
    public function setSutaState($SutaState)
    {
      $this->SutaState = $SutaState;
      return $this;
    }

}
