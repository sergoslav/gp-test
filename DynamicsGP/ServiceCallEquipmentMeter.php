<?php

class ServiceCallEquipmentMeter extends ServiceEquipmentMeter
{

    /**
     * @var int $InternalUsage
     */
    protected $InternalUsage = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return int
     */
    public function getInternalUsage()
    {
      return $this->InternalUsage;
    }

    /**
     * @param int $InternalUsage
     * @return ServiceCallEquipmentMeter
     */
    public function setInternalUsage($InternalUsage)
    {
      $this->InternalUsage = $InternalUsage;
      return $this;
    }

}
