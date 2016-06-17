<?php

class RestrictionOfNullableOfManufacturingOrderPriority
{

    /**
     * @var ManufacturingOrderPriority $EqualValue
     */
    protected $EqualValue = null;

    /**
     * @var ManufacturingOrderPriority $NotEqualValue
     */
    protected $NotEqualValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ManufacturingOrderPriority
     */
    public function getEqualValue()
    {
      return $this->EqualValue;
    }

    /**
     * @param ManufacturingOrderPriority $EqualValue
     * @return RestrictionOfNullableOfManufacturingOrderPriority
     */
    public function setEqualValue($EqualValue)
    {
      $this->EqualValue = $EqualValue;
      return $this;
    }

    /**
     * @return ManufacturingOrderPriority
     */
    public function getNotEqualValue()
    {
      return $this->NotEqualValue;
    }

    /**
     * @param ManufacturingOrderPriority $NotEqualValue
     * @return RestrictionOfNullableOfManufacturingOrderPriority
     */
    public function setNotEqualValue($NotEqualValue)
    {
      $this->NotEqualValue = $NotEqualValue;
      return $this;
    }

}
