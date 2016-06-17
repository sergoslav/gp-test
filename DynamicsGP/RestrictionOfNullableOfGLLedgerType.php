<?php

class RestrictionOfNullableOfGLLedgerType
{

    /**
     * @var GLLedgerType $EqualValue
     */
    protected $EqualValue = null;

    /**
     * @var GLLedgerType $NotEqualValue
     */
    protected $NotEqualValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GLLedgerType
     */
    public function getEqualValue()
    {
      return $this->EqualValue;
    }

    /**
     * @param GLLedgerType $EqualValue
     * @return RestrictionOfNullableOfGLLedgerType
     */
    public function setEqualValue($EqualValue)
    {
      $this->EqualValue = $EqualValue;
      return $this;
    }

    /**
     * @return GLLedgerType
     */
    public function getNotEqualValue()
    {
      return $this->NotEqualValue;
    }

    /**
     * @param GLLedgerType $NotEqualValue
     * @return RestrictionOfNullableOfGLLedgerType
     */
    public function setNotEqualValue($NotEqualValue)
    {
      $this->NotEqualValue = $NotEqualValue;
      return $this;
    }

}
