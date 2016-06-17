<?php

class ServiceCallEquipmentCode extends ServiceEquipmentCode
{

    /**
     * @var boolean $PerformedPreventiveMaintenance
     */
    protected $PerformedPreventiveMaintenance = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return boolean
     */
    public function getPerformedPreventiveMaintenance()
    {
      return $this->PerformedPreventiveMaintenance;
    }

    /**
     * @param boolean $PerformedPreventiveMaintenance
     * @return ServiceCallEquipmentCode
     */
    public function setPerformedPreventiveMaintenance($PerformedPreventiveMaintenance)
    {
      $this->PerformedPreventiveMaintenance = $PerformedPreventiveMaintenance;
      return $this;
    }

}
