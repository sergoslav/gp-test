<?php

class RestrictionOfNullableOfReceivablesDocumentType
{

    /**
     * @var ReceivablesDocumentType $EqualValue
     */
    protected $EqualValue = null;

    /**
     * @var ReceivablesDocumentType $NotEqualValue
     */
    protected $NotEqualValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ReceivablesDocumentType
     */
    public function getEqualValue()
    {
      return $this->EqualValue;
    }

    /**
     * @param ReceivablesDocumentType $EqualValue
     * @return RestrictionOfNullableOfReceivablesDocumentType
     */
    public function setEqualValue($EqualValue)
    {
      $this->EqualValue = $EqualValue;
      return $this;
    }

    /**
     * @return ReceivablesDocumentType
     */
    public function getNotEqualValue()
    {
      return $this->NotEqualValue;
    }

    /**
     * @param ReceivablesDocumentType $NotEqualValue
     * @return RestrictionOfNullableOfReceivablesDocumentType
     */
    public function setNotEqualValue($NotEqualValue)
    {
      $this->NotEqualValue = $NotEqualValue;
      return $this;
    }

}
