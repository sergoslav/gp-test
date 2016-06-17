<?php

class RestrictionOfNullableOfServiceTransactionState
{

    /**
     * @var ServiceTransactionState $EqualValue
     */
    protected $EqualValue = null;

    /**
     * @var ServiceTransactionState $NotEqualValue
     */
    protected $NotEqualValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ServiceTransactionState
     */
    public function getEqualValue()
    {
      return $this->EqualValue;
    }

    /**
     * @param ServiceTransactionState $EqualValue
     * @return RestrictionOfNullableOfServiceTransactionState
     */
    public function setEqualValue($EqualValue)
    {
      $this->EqualValue = $EqualValue;
      return $this;
    }

    /**
     * @return ServiceTransactionState
     */
    public function getNotEqualValue()
    {
      return $this->NotEqualValue;
    }

    /**
     * @param ServiceTransactionState $NotEqualValue
     * @return RestrictionOfNullableOfServiceTransactionState
     */
    public function setNotEqualValue($NotEqualValue)
    {
      $this->NotEqualValue = $NotEqualValue;
      return $this;
    }

}
