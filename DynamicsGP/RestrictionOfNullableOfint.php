<?php

class RestrictionOfNullableOfint
{

    /**
     * @var int $EqualValue
     */
    protected $EqualValue = null;

    /**
     * @var int $NotEqualValue
     */
    protected $NotEqualValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getEqualValue()
    {
      return $this->EqualValue;
    }

    /**
     * @param int $EqualValue
     * @return RestrictionOfNullableOfint
     */
    public function setEqualValue($EqualValue)
    {
      $this->EqualValue = $EqualValue;
      return $this;
    }

    /**
     * @return int
     */
    public function getNotEqualValue()
    {
      return $this->NotEqualValue;
    }

    /**
     * @param int $NotEqualValue
     * @return RestrictionOfNullableOfint
     */
    public function setNotEqualValue($NotEqualValue)
    {
      $this->NotEqualValue = $NotEqualValue;
      return $this;
    }

}
