<?php

class RestrictionOfNullableOfApplicationStatus
{

    /**
     * @var ApplicationStatus $EqualValue
     */
    protected $EqualValue = null;

    /**
     * @var ApplicationStatus $NotEqualValue
     */
    protected $NotEqualValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ApplicationStatus
     */
    public function getEqualValue()
    {
      return $this->EqualValue;
    }

    /**
     * @param ApplicationStatus $EqualValue
     * @return RestrictionOfNullableOfApplicationStatus
     */
    public function setEqualValue($EqualValue)
    {
      $this->EqualValue = $EqualValue;
      return $this;
    }

    /**
     * @return ApplicationStatus
     */
    public function getNotEqualValue()
    {
      return $this->NotEqualValue;
    }

    /**
     * @param ApplicationStatus $NotEqualValue
     * @return RestrictionOfNullableOfApplicationStatus
     */
    public function setNotEqualValue($NotEqualValue)
    {
      $this->NotEqualValue = $NotEqualValue;
      return $this;
    }

}
