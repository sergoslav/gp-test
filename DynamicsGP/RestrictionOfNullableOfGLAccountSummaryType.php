<?php

class RestrictionOfNullableOfGLAccountSummaryType
{

    /**
     * @var GLAccountSummaryType $EqualValue
     */
    protected $EqualValue = null;

    /**
     * @var GLAccountSummaryType $NotEqualValue
     */
    protected $NotEqualValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GLAccountSummaryType
     */
    public function getEqualValue()
    {
      return $this->EqualValue;
    }

    /**
     * @param GLAccountSummaryType $EqualValue
     * @return RestrictionOfNullableOfGLAccountSummaryType
     */
    public function setEqualValue($EqualValue)
    {
      $this->EqualValue = $EqualValue;
      return $this;
    }

    /**
     * @return GLAccountSummaryType
     */
    public function getNotEqualValue()
    {
      return $this->NotEqualValue;
    }

    /**
     * @param GLAccountSummaryType $NotEqualValue
     * @return RestrictionOfNullableOfGLAccountSummaryType
     */
    public function setNotEqualValue($NotEqualValue)
    {
      $this->NotEqualValue = $NotEqualValue;
      return $this;
    }

}
