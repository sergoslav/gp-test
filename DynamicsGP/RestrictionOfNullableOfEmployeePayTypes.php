<?php

class RestrictionOfNullableOfEmployeePayTypes
{

    /**
     * @var EmployeePayTypes $EqualValue
     */
    protected $EqualValue = null;

    /**
     * @var EmployeePayTypes $NotEqualValue
     */
    protected $NotEqualValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return EmployeePayTypes
     */
    public function getEqualValue()
    {
      return $this->EqualValue;
    }

    /**
     * @param EmployeePayTypes $EqualValue
     * @return RestrictionOfNullableOfEmployeePayTypes
     */
    public function setEqualValue($EqualValue)
    {
      $this->EqualValue = $EqualValue;
      return $this;
    }

    /**
     * @return EmployeePayTypes
     */
    public function getNotEqualValue()
    {
      return $this->NotEqualValue;
    }

    /**
     * @param EmployeePayTypes $NotEqualValue
     * @return RestrictionOfNullableOfEmployeePayTypes
     */
    public function setNotEqualValue($NotEqualValue)
    {
      $this->NotEqualValue = $NotEqualValue;
      return $this;
    }

}
