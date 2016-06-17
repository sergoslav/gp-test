<?php

class ServiceEquipmentMeter extends BusinessObject
{

    /**
     * @var int $CurrentReading
     */
    protected $CurrentReading = null;

    /**
     * @var boolean $Replaced
     */
    protected $Replaced = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return int
     */
    public function getCurrentReading()
    {
      return $this->CurrentReading;
    }

    /**
     * @param int $CurrentReading
     * @return ServiceEquipmentMeter
     */
    public function setCurrentReading($CurrentReading)
    {
      $this->CurrentReading = $CurrentReading;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReplaced()
    {
      return $this->Replaced;
    }

    /**
     * @param boolean $Replaced
     * @return ServiceEquipmentMeter
     */
    public function setReplaced($Replaced)
    {
      $this->Replaced = $Replaced;
      return $this;
    }

}
