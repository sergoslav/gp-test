<?php

class RestrictionOfNullableOfInventoryTransactionState
{

    /**
     * @var InventoryTransactionState $EqualValue
     */
    protected $EqualValue = null;

    /**
     * @var InventoryTransactionState $NotEqualValue
     */
    protected $NotEqualValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return InventoryTransactionState
     */
    public function getEqualValue()
    {
      return $this->EqualValue;
    }

    /**
     * @param InventoryTransactionState $EqualValue
     * @return RestrictionOfNullableOfInventoryTransactionState
     */
    public function setEqualValue($EqualValue)
    {
      $this->EqualValue = $EqualValue;
      return $this;
    }

    /**
     * @return InventoryTransactionState
     */
    public function getNotEqualValue()
    {
      return $this->NotEqualValue;
    }

    /**
     * @param InventoryTransactionState $NotEqualValue
     * @return RestrictionOfNullableOfInventoryTransactionState
     */
    public function setNotEqualValue($NotEqualValue)
    {
      $this->NotEqualValue = $NotEqualValue;
      return $this;
    }

}
