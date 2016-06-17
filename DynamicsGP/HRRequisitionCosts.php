<?php

class HRRequisitionCosts
{

    /**
     * @var float $Advertising
     */
    protected $Advertising = null;

    /**
     * @var float $Lodging
     */
    protected $Lodging = null;

    /**
     * @var float $MovingExpenses
     */
    protected $MovingExpenses = null;

    /**
     * @var float $Other
     */
    protected $Other = null;

    /**
     * @var float $RecruiterFees
     */
    protected $RecruiterFees = null;

    /**
     * @var float $Travel
     */
    protected $Travel = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return float
     */
    public function getAdvertising()
    {
      return $this->Advertising;
    }

    /**
     * @param float $Advertising
     * @return HRRequisitionCosts
     */
    public function setAdvertising($Advertising)
    {
      $this->Advertising = $Advertising;
      return $this;
    }

    /**
     * @return float
     */
    public function getLodging()
    {
      return $this->Lodging;
    }

    /**
     * @param float $Lodging
     * @return HRRequisitionCosts
     */
    public function setLodging($Lodging)
    {
      $this->Lodging = $Lodging;
      return $this;
    }

    /**
     * @return float
     */
    public function getMovingExpenses()
    {
      return $this->MovingExpenses;
    }

    /**
     * @param float $MovingExpenses
     * @return HRRequisitionCosts
     */
    public function setMovingExpenses($MovingExpenses)
    {
      $this->MovingExpenses = $MovingExpenses;
      return $this;
    }

    /**
     * @return float
     */
    public function getOther()
    {
      return $this->Other;
    }

    /**
     * @param float $Other
     * @return HRRequisitionCosts
     */
    public function setOther($Other)
    {
      $this->Other = $Other;
      return $this;
    }

    /**
     * @return float
     */
    public function getRecruiterFees()
    {
      return $this->RecruiterFees;
    }

    /**
     * @param float $RecruiterFees
     * @return HRRequisitionCosts
     */
    public function setRecruiterFees($RecruiterFees)
    {
      $this->RecruiterFees = $RecruiterFees;
      return $this;
    }

    /**
     * @return float
     */
    public function getTravel()
    {
      return $this->Travel;
    }

    /**
     * @param float $Travel
     * @return HRRequisitionCosts
     */
    public function setTravel($Travel)
    {
      $this->Travel = $Travel;
      return $this;
    }

}
