<?php

class RestrictionOfNullableOfTaxDetailBase
{

    /**
     * @var TaxDetailBase $EqualValue
     */
    protected $EqualValue = null;

    /**
     * @var TaxDetailBase $NotEqualValue
     */
    protected $NotEqualValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TaxDetailBase
     */
    public function getEqualValue()
    {
      return $this->EqualValue;
    }

    /**
     * @param TaxDetailBase $EqualValue
     * @return RestrictionOfNullableOfTaxDetailBase
     */
    public function setEqualValue($EqualValue)
    {
      $this->EqualValue = $EqualValue;
      return $this;
    }

    /**
     * @return TaxDetailBase
     */
    public function getNotEqualValue()
    {
      return $this->NotEqualValue;
    }

    /**
     * @param TaxDetailBase $NotEqualValue
     * @return RestrictionOfNullableOfTaxDetailBase
     */
    public function setNotEqualValue($NotEqualValue)
    {
      $this->NotEqualValue = $NotEqualValue;
      return $this;
    }

}
