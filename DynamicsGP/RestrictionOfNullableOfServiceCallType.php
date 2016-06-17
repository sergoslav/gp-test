<?php

class RestrictionOfNullableOfServiceCallType
{

    /**
     * @var ServiceCallType $EqualValue
     */
    protected $EqualValue = null;

    /**
     * @var ServiceCallType $NotEqualValue
     */
    protected $NotEqualValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ServiceCallType
     */
    public function getEqualValue()
    {
      return $this->EqualValue;
    }

    /**
     * @param ServiceCallType $EqualValue
     * @return RestrictionOfNullableOfServiceCallType
     */
    public function setEqualValue($EqualValue)
    {
      $this->EqualValue = $EqualValue;
      return $this;
    }

    /**
     * @return ServiceCallType
     */
    public function getNotEqualValue()
    {
      return $this->NotEqualValue;
    }

    /**
     * @param ServiceCallType $NotEqualValue
     * @return RestrictionOfNullableOfServiceCallType
     */
    public function setNotEqualValue($NotEqualValue)
    {
      $this->NotEqualValue = $NotEqualValue;
      return $this;
    }

}
