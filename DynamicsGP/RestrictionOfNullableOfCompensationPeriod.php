<?php

class RestrictionOfNullableOfCompensationPeriod
{

    /**
     * @var CompensationPeriod $EqualValue
     */
    protected $EqualValue = null;

    /**
     * @var CompensationPeriod $NotEqualValue
     */
    protected $NotEqualValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CompensationPeriod
     */
    public function getEqualValue()
    {
      return $this->EqualValue;
    }

    /**
     * @param CompensationPeriod $EqualValue
     * @return RestrictionOfNullableOfCompensationPeriod
     */
    public function setEqualValue($EqualValue)
    {
      $this->EqualValue = $EqualValue;
      return $this;
    }

    /**
     * @return CompensationPeriod
     */
    public function getNotEqualValue()
    {
      return $this->NotEqualValue;
    }

    /**
     * @param CompensationPeriod $NotEqualValue
     * @return RestrictionOfNullableOfCompensationPeriod
     */
    public function setNotEqualValue($NotEqualValue)
    {
      $this->NotEqualValue = $NotEqualValue;
      return $this;
    }

}
