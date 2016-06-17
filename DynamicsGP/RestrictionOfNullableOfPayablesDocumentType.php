<?php

class RestrictionOfNullableOfPayablesDocumentType
{

    /**
     * @var PayablesDocumentType $EqualValue
     */
    protected $EqualValue = null;

    /**
     * @var PayablesDocumentType $NotEqualValue
     */
    protected $NotEqualValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PayablesDocumentType
     */
    public function getEqualValue()
    {
      return $this->EqualValue;
    }

    /**
     * @param PayablesDocumentType $EqualValue
     * @return RestrictionOfNullableOfPayablesDocumentType
     */
    public function setEqualValue($EqualValue)
    {
      $this->EqualValue = $EqualValue;
      return $this;
    }

    /**
     * @return PayablesDocumentType
     */
    public function getNotEqualValue()
    {
      return $this->NotEqualValue;
    }

    /**
     * @param PayablesDocumentType $NotEqualValue
     * @return RestrictionOfNullableOfPayablesDocumentType
     */
    public function setNotEqualValue($NotEqualValue)
    {
      $this->NotEqualValue = $NotEqualValue;
      return $this;
    }

}
