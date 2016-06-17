<?php

class RestrictionOfNullableOfReturnMaterialAuthorizationType
{

    /**
     * @var ReturnMaterialAuthorizationType $EqualValue
     */
    protected $EqualValue = null;

    /**
     * @var ReturnMaterialAuthorizationType $NotEqualValue
     */
    protected $NotEqualValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ReturnMaterialAuthorizationType
     */
    public function getEqualValue()
    {
      return $this->EqualValue;
    }

    /**
     * @param ReturnMaterialAuthorizationType $EqualValue
     * @return RestrictionOfNullableOfReturnMaterialAuthorizationType
     */
    public function setEqualValue($EqualValue)
    {
      $this->EqualValue = $EqualValue;
      return $this;
    }

    /**
     * @return ReturnMaterialAuthorizationType
     */
    public function getNotEqualValue()
    {
      return $this->NotEqualValue;
    }

    /**
     * @param ReturnMaterialAuthorizationType $NotEqualValue
     * @return RestrictionOfNullableOfReturnMaterialAuthorizationType
     */
    public function setNotEqualValue($NotEqualValue)
    {
      $this->NotEqualValue = $NotEqualValue;
      return $this;
    }

}
