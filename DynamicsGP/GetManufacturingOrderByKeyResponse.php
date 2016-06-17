<?php

class GetManufacturingOrderByKeyResponse
{

    /**
     * @var ManufacturingOrder $GetManufacturingOrderByKeyResult
     */
    protected $GetManufacturingOrderByKeyResult = null;

    /**
     * @param ManufacturingOrder $GetManufacturingOrderByKeyResult
     */
    public function __construct($GetManufacturingOrderByKeyResult)
    {
      $this->GetManufacturingOrderByKeyResult = $GetManufacturingOrderByKeyResult;
    }

    /**
     * @return ManufacturingOrder
     */
    public function getGetManufacturingOrderByKeyResult()
    {
      return $this->GetManufacturingOrderByKeyResult;
    }

    /**
     * @param ManufacturingOrder $GetManufacturingOrderByKeyResult
     * @return GetManufacturingOrderByKeyResponse
     */
    public function setGetManufacturingOrderByKeyResult($GetManufacturingOrderByKeyResult)
    {
      $this->GetManufacturingOrderByKeyResult = $GetManufacturingOrderByKeyResult;
      return $this;
    }

}
