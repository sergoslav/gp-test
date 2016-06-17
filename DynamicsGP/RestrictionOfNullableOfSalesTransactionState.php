<?php

class RestrictionOfNullableOfSalesTransactionState
{

    /**
     * @var SalesTransactionState $EqualValue
     */
    protected $EqualValue = null;

    /**
     * @var SalesTransactionState $NotEqualValue
     */
    protected $NotEqualValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SalesTransactionState
     */
    public function getEqualValue()
    {
      return $this->EqualValue;
    }

    /**
     * @param SalesTransactionState $EqualValue
     * @return RestrictionOfNullableOfSalesTransactionState
     */
    public function setEqualValue($EqualValue)
    {
      $this->EqualValue = $EqualValue;
      return $this;
    }

    /**
     * @return SalesTransactionState
     */
    public function getNotEqualValue()
    {
      return $this->NotEqualValue;
    }

    /**
     * @param SalesTransactionState $NotEqualValue
     * @return RestrictionOfNullableOfSalesTransactionState
     */
    public function setNotEqualValue($NotEqualValue)
    {
      $this->NotEqualValue = $NotEqualValue;
      return $this;
    }

}
