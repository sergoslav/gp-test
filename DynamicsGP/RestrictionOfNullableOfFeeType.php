<?php

class RestrictionOfNullableOfFeeType
{

    /**
     * @var FeeType $EqualValue
     */
    protected $EqualValue = null;

    /**
     * @var FeeType $NotEqualValue
     */
    protected $NotEqualValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return FeeType
     */
    public function getEqualValue()
    {
      return $this->EqualValue;
    }

    /**
     * @param FeeType $EqualValue
     * @return RestrictionOfNullableOfFeeType
     */
    public function setEqualValue($EqualValue)
    {
      $this->EqualValue = $EqualValue;
      return $this;
    }

    /**
     * @return FeeType
     */
    public function getNotEqualValue()
    {
      return $this->NotEqualValue;
    }

    /**
     * @param FeeType $NotEqualValue
     * @return RestrictionOfNullableOfFeeType
     */
    public function setNotEqualValue($NotEqualValue)
    {
      $this->NotEqualValue = $NotEqualValue;
      return $this;
    }

}
