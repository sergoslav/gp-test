<?php

class RestrictionOfNullableOfSalesCommissionTransactionState
{

    /**
     * @var SalesCommissionTransactionState $EqualValue
     */
    protected $EqualValue = null;

    /**
     * @var SalesCommissionTransactionState $NotEqualValue
     */
    protected $NotEqualValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SalesCommissionTransactionState
     */
    public function getEqualValue()
    {
      return $this->EqualValue;
    }

    /**
     * @param SalesCommissionTransactionState $EqualValue
     * @return RestrictionOfNullableOfSalesCommissionTransactionState
     */
    public function setEqualValue($EqualValue)
    {
      $this->EqualValue = $EqualValue;
      return $this;
    }

    /**
     * @return SalesCommissionTransactionState
     */
    public function getNotEqualValue()
    {
      return $this->NotEqualValue;
    }

    /**
     * @param SalesCommissionTransactionState $NotEqualValue
     * @return RestrictionOfNullableOfSalesCommissionTransactionState
     */
    public function setNotEqualValue($NotEqualValue)
    {
      $this->NotEqualValue = $NotEqualValue;
      return $this;
    }

}
