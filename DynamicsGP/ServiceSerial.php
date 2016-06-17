<?php

class ServiceSerial extends ServiceSerialLot
{

    /**
     * @var string $SerialNumber
     */
    protected $SerialNumber = null;

    /**
     * @var ServiceEquipmentKey $ServiceEquipmentKey
     */
    protected $ServiceEquipmentKey = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getSerialNumber()
    {
      return $this->SerialNumber;
    }

    /**
     * @param string $SerialNumber
     * @return ServiceSerial
     */
    public function setSerialNumber($SerialNumber)
    {
      $this->SerialNumber = $SerialNumber;
      return $this;
    }

    /**
     * @return ServiceEquipmentKey
     */
    public function getServiceEquipmentKey()
    {
      return $this->ServiceEquipmentKey;
    }

    /**
     * @param ServiceEquipmentKey $ServiceEquipmentKey
     * @return ServiceSerial
     */
    public function setServiceEquipmentKey($ServiceEquipmentKey)
    {
      $this->ServiceEquipmentKey = $ServiceEquipmentKey;
      return $this;
    }

}
