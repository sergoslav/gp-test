<?php

class RestrictionOfNullableOfReceivablesTransactionState
{

    /**
     * @var ReceivablesTransactionState $EqualValue
     */
    protected $EqualValue = null;

    /**
     * @var ReceivablesTransactionState $NotEqualValue
     */
    protected $NotEqualValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ReceivablesTransactionState
     */
    public function getEqualValue()
    {
      return $this->EqualValue;
    }

    /**
     * @param ReceivablesTransactionState $EqualValue
     * @return RestrictionOfNullableOfReceivablesTransactionState
     */
    public function setEqualValue($EqualValue)
    {
      $this->EqualValue = $EqualValue;
      return $this;
    }

    /**
     * @return ReceivablesTransactionState
     */
    public function getNotEqualValue()
    {
      return $this->NotEqualValue;
    }

    /**
     * @param ReceivablesTransactionState $NotEqualValue
     * @return RestrictionOfNullableOfReceivablesTransactionState
     */
    public function setNotEqualValue($NotEqualValue)
    {
      $this->NotEqualValue = $NotEqualValue;
      return $this;
    }

}
