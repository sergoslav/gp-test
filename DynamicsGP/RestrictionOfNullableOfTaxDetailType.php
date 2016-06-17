<?php

class RestrictionOfNullableOfTaxDetailType
{

    /**
     * @var TaxDetailType $EqualValue
     */
    protected $EqualValue = null;

    /**
     * @var TaxDetailType $NotEqualValue
     */
    protected $NotEqualValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TaxDetailType
     */
    public function getEqualValue()
    {
      return $this->EqualValue;
    }

    /**
     * @param TaxDetailType $EqualValue
     * @return RestrictionOfNullableOfTaxDetailType
     */
    public function setEqualValue($EqualValue)
    {
      $this->EqualValue = $EqualValue;
      return $this;
    }

    /**
     * @return TaxDetailType
     */
    public function getNotEqualValue()
    {
      return $this->NotEqualValue;
    }

    /**
     * @param TaxDetailType $NotEqualValue
     * @return RestrictionOfNullableOfTaxDetailType
     */
    public function setNotEqualValue($NotEqualValue)
    {
      $this->NotEqualValue = $NotEqualValue;
      return $this;
    }

}
