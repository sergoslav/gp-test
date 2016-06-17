<?php

class ServiceEquipmentReadingKey extends ReferenceKey
{

    /**
     * @var int $SequenceNumber
     */
    protected $SequenceNumber = null;

    /**
     * @var ServiceEquipmentKey $ServiceEquipmentKey
     */
    protected $ServiceEquipmentKey = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return int
     */
    public function getSequenceNumber()
    {
      return $this->SequenceNumber;
    }

    /**
     * @param int $SequenceNumber
     * @return ServiceEquipmentReadingKey
     */
    public function setSequenceNumber($SequenceNumber)
    {
      $this->SequenceNumber = $SequenceNumber;
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
     * @return ServiceEquipmentReadingKey
     */
    public function setServiceEquipmentKey($ServiceEquipmentKey)
    {
      $this->ServiceEquipmentKey = $ServiceEquipmentKey;
      return $this;
    }

}
