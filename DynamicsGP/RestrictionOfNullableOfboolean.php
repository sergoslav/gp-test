<?php

class RestrictionOfNullableOfboolean
{

    /**
     * @var boolean $EqualValue
     */
    protected $EqualValue = null;

    /**
     * @var boolean $NotEqualValue
     */
    protected $NotEqualValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getEqualValue()
    {
      return $this->EqualValue;
    }

    /**
     * @param boolean $EqualValue
     * @return RestrictionOfNullableOfboolean
     */
    public function setEqualValue($EqualValue)
    {
      $this->EqualValue = $EqualValue;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNotEqualValue()
    {
      return $this->NotEqualValue;
    }

    /**
     * @param boolean $NotEqualValue
     * @return RestrictionOfNullableOfboolean
     */
    public function setNotEqualValue($NotEqualValue)
    {
      $this->NotEqualValue = $NotEqualValue;
      return $this;
    }

}
