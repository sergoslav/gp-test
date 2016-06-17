<?php

class RestrictionOfNullableOfPurchaseTransactionState
{

    /**
     * @var PurchaseTransactionState $EqualValue
     */
    protected $EqualValue = null;

    /**
     * @var PurchaseTransactionState $NotEqualValue
     */
    protected $NotEqualValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PurchaseTransactionState
     */
    public function getEqualValue()
    {
      return $this->EqualValue;
    }

    /**
     * @param PurchaseTransactionState $EqualValue
     * @return RestrictionOfNullableOfPurchaseTransactionState
     */
    public function setEqualValue($EqualValue)
    {
      $this->EqualValue = $EqualValue;
      return $this;
    }

    /**
     * @return PurchaseTransactionState
     */
    public function getNotEqualValue()
    {
      return $this->NotEqualValue;
    }

    /**
     * @param PurchaseTransactionState $NotEqualValue
     * @return RestrictionOfNullableOfPurchaseTransactionState
     */
    public function setNotEqualValue($NotEqualValue)
    {
      $this->NotEqualValue = $NotEqualValue;
      return $this;
    }

}
