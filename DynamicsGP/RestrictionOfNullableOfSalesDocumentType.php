<?php

class RestrictionOfNullableOfSalesDocumentType
{

    /**
     * @var SalesDocumentType $EqualValue
     */
    protected $EqualValue = null;

    /**
     * @var SalesDocumentType $NotEqualValue
     */
    protected $NotEqualValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SalesDocumentType
     */
    public function getEqualValue()
    {
      return $this->EqualValue;
    }

    /**
     * @param SalesDocumentType $EqualValue
     * @return RestrictionOfNullableOfSalesDocumentType
     */
    public function setEqualValue($EqualValue)
    {
      $this->EqualValue = $EqualValue;
      return $this;
    }

    /**
     * @return SalesDocumentType
     */
    public function getNotEqualValue()
    {
      return $this->NotEqualValue;
    }

    /**
     * @param SalesDocumentType $NotEqualValue
     * @return RestrictionOfNullableOfSalesDocumentType
     */
    public function setNotEqualValue($NotEqualValue)
    {
      $this->NotEqualValue = $NotEqualValue;
      return $this;
    }

}
