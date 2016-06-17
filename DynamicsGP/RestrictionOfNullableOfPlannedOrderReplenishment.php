<?php

class RestrictionOfNullableOfPlannedOrderReplenishment
{

    /**
     * @var PlannedOrderReplenishment $EqualValue
     */
    protected $EqualValue = null;

    /**
     * @var PlannedOrderReplenishment $NotEqualValue
     */
    protected $NotEqualValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PlannedOrderReplenishment
     */
    public function getEqualValue()
    {
      return $this->EqualValue;
    }

    /**
     * @param PlannedOrderReplenishment $EqualValue
     * @return RestrictionOfNullableOfPlannedOrderReplenishment
     */
    public function setEqualValue($EqualValue)
    {
      $this->EqualValue = $EqualValue;
      return $this;
    }

    /**
     * @return PlannedOrderReplenishment
     */
    public function getNotEqualValue()
    {
      return $this->NotEqualValue;
    }

    /**
     * @param PlannedOrderReplenishment $NotEqualValue
     * @return RestrictionOfNullableOfPlannedOrderReplenishment
     */
    public function setNotEqualValue($NotEqualValue)
    {
      $this->NotEqualValue = $NotEqualValue;
      return $this;
    }

}
