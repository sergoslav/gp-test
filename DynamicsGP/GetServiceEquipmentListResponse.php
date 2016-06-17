<?php

class GetServiceEquipmentListResponse
{

    /**
     * @var ArrayOfServiceEquipmentSummary $GetServiceEquipmentListResult
     */
    protected $GetServiceEquipmentListResult = null;

    /**
     * @param ArrayOfServiceEquipmentSummary $GetServiceEquipmentListResult
     */
    public function __construct($GetServiceEquipmentListResult)
    {
      $this->GetServiceEquipmentListResult = $GetServiceEquipmentListResult;
    }

    /**
     * @return ArrayOfServiceEquipmentSummary
     */
    public function getGetServiceEquipmentListResult()
    {
      return $this->GetServiceEquipmentListResult;
    }

    /**
     * @param ArrayOfServiceEquipmentSummary $GetServiceEquipmentListResult
     * @return GetServiceEquipmentListResponse
     */
    public function setGetServiceEquipmentListResult($GetServiceEquipmentListResult)
    {
      $this->GetServiceEquipmentListResult = $GetServiceEquipmentListResult;
      return $this;
    }

}
