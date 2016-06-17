<?php

class RestrictionOfNullableOfGLTransactionState
{

    /**
     * @var GLTransactionState $EqualValue
     */
    protected $EqualValue = null;

    /**
     * @var GLTransactionState $NotEqualValue
     */
    protected $NotEqualValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GLTransactionState
     */
    public function getEqualValue()
    {
      return $this->EqualValue;
    }

    /**
     * @param GLTransactionState $EqualValue
     * @return RestrictionOfNullableOfGLTransactionState
     */
    public function setEqualValue($EqualValue)
    {
      $this->EqualValue = $EqualValue;
      return $this;
    }

    /**
     * @return GLTransactionState
     */
    public function getNotEqualValue()
    {
      return $this->NotEqualValue;
    }

    /**
     * @param GLTransactionState $NotEqualValue
     * @return RestrictionOfNullableOfGLTransactionState
     */
    public function setNotEqualValue($NotEqualValue)
    {
      $this->NotEqualValue = $NotEqualValue;
      return $this;
    }

}
