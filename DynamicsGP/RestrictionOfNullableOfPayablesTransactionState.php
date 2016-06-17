<?php

class RestrictionOfNullableOfPayablesTransactionState
{

    /**
     * @var PayablesTransactionState $EqualValue
     */
    protected $EqualValue = null;

    /**
     * @var PayablesTransactionState $NotEqualValue
     */
    protected $NotEqualValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PayablesTransactionState
     */
    public function getEqualValue()
    {
      return $this->EqualValue;
    }

    /**
     * @param PayablesTransactionState $EqualValue
     * @return RestrictionOfNullableOfPayablesTransactionState
     */
    public function setEqualValue($EqualValue)
    {
      $this->EqualValue = $EqualValue;
      return $this;
    }

    /**
     * @return PayablesTransactionState
     */
    public function getNotEqualValue()
    {
      return $this->NotEqualValue;
    }

    /**
     * @param PayablesTransactionState $NotEqualValue
     * @return RestrictionOfNullableOfPayablesTransactionState
     */
    public function setNotEqualValue($NotEqualValue)
    {
      $this->NotEqualValue = $NotEqualValue;
      return $this;
    }

}
