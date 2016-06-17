<?php

class RestrictionOfNullableOfManufacturingOrderStatus
{

    /**
     * @var ManufacturingOrderStatus $EqualValue
     */
    protected $EqualValue = null;

    /**
     * @var ManufacturingOrderStatus $NotEqualValue
     */
    protected $NotEqualValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ManufacturingOrderStatus
     */
    public function getEqualValue()
    {
      return $this->EqualValue;
    }

    /**
     * @param ManufacturingOrderStatus $EqualValue
     * @return RestrictionOfNullableOfManufacturingOrderStatus
     */
    public function setEqualValue($EqualValue)
    {
      $this->EqualValue = $EqualValue;
      return $this;
    }

    /**
     * @return ManufacturingOrderStatus
     */
    public function getNotEqualValue()
    {
      return $this->NotEqualValue;
    }

    /**
     * @param ManufacturingOrderStatus $NotEqualValue
     * @return RestrictionOfNullableOfManufacturingOrderStatus
     */
    public function setNotEqualValue($NotEqualValue)
    {
      $this->NotEqualValue = $NotEqualValue;
      return $this;
    }

}
