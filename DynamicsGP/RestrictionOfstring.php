<?php

class RestrictionOfstring extends Restriction
{

    /**
     * @var string $EqualValue
     */
    protected $EqualValue = null;

    /**
     * @var string $NotEqualValue
     */
    protected $NotEqualValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getEqualValue()
    {
      return $this->EqualValue;
    }

    /**
     * @param string $EqualValue
     * @return RestrictionOfstring
     */
    public function setEqualValue($EqualValue)
    {
      $this->EqualValue = $EqualValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getNotEqualValue()
    {
      return $this->NotEqualValue;
    }

    /**
     * @param string $NotEqualValue
     * @return RestrictionOfstring
     */
    public function setNotEqualValue($NotEqualValue)
    {
      $this->NotEqualValue = $NotEqualValue;
      return $this;
    }

}
