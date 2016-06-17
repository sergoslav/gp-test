<?php

class GetServiceEquipmentByKeyResponse
{

    /**
     * @var ServiceEquipment $GetServiceEquipmentByKeyResult
     */
    protected $GetServiceEquipmentByKeyResult = null;

    /**
     * @param ServiceEquipment $GetServiceEquipmentByKeyResult
     */
    public function __construct($GetServiceEquipmentByKeyResult)
    {
      $this->GetServiceEquipmentByKeyResult = $GetServiceEquipmentByKeyResult;
    }

    /**
     * @return ServiceEquipment
     */
    public function getGetServiceEquipmentByKeyResult()
    {
      return $this->GetServiceEquipmentByKeyResult;
    }

    /**
     * @param ServiceEquipment $GetServiceEquipmentByKeyResult
     * @return GetServiceEquipmentByKeyResponse
     */
    public function setGetServiceEquipmentByKeyResult($GetServiceEquipmentByKeyResult)
    {
      $this->GetServiceEquipmentByKeyResult = $GetServiceEquipmentByKeyResult;
      return $this;
    }

}
