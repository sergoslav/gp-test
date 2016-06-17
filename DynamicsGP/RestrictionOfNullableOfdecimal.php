<?php

class RestrictionOfNullableOfdecimal
{

    /**
     * @var float $EqualValue
     */
    protected $EqualValue = null;

    /**
     * @var float $NotEqualValue
     */
    protected $NotEqualValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return float
     */
    public function getEqualValue()
    {
      return $this->EqualValue;
    }

    /**
     * @param float $EqualValue
     * @return RestrictionOfNullableOfdecimal
     */
    public function setEqualValue($EqualValue)
    {
      $this->EqualValue = $EqualValue;
      return $this;
    }

    /**
     * @return float
     */
    public function getNotEqualValue()
    {
      return $this->NotEqualValue;
    }

    /**
     * @param float $NotEqualValue
     * @return RestrictionOfNullableOfdecimal
     */
    public function setNotEqualValue($NotEqualValue)
    {
      $this->NotEqualValue = $NotEqualValue;
      return $this;
    }

}
