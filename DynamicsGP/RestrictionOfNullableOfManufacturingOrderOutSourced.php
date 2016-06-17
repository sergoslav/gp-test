<?php

class RestrictionOfNullableOfManufacturingOrderOutSourced
{

    /**
     * @var ManufacturingOrderOutSourced $EqualValue
     */
    protected $EqualValue = null;

    /**
     * @var ManufacturingOrderOutSourced $NotEqualValue
     */
    protected $NotEqualValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ManufacturingOrderOutSourced
     */
    public function getEqualValue()
    {
      return $this->EqualValue;
    }

    /**
     * @param ManufacturingOrderOutSourced $EqualValue
     * @return RestrictionOfNullableOfManufacturingOrderOutSourced
     */
    public function setEqualValue($EqualValue)
    {
      $this->EqualValue = $EqualValue;
      return $this;
    }

    /**
     * @return ManufacturingOrderOutSourced
     */
    public function getNotEqualValue()
    {
      return $this->NotEqualValue;
    }

    /**
     * @param ManufacturingOrderOutSourced $NotEqualValue
     * @return RestrictionOfNullableOfManufacturingOrderOutSourced
     */
    public function setNotEqualValue($NotEqualValue)
    {
      $this->NotEqualValue = $NotEqualValue;
      return $this;
    }

}
