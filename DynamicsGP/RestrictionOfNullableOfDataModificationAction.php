<?php

class RestrictionOfNullableOfDataModificationAction
{

    /**
     * @var DataModificationAction $EqualValue
     */
    protected $EqualValue = null;

    /**
     * @var DataModificationAction $NotEqualValue
     */
    protected $NotEqualValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DataModificationAction
     */
    public function getEqualValue()
    {
      return $this->EqualValue;
    }

    /**
     * @param DataModificationAction $EqualValue
     * @return RestrictionOfNullableOfDataModificationAction
     */
    public function setEqualValue($EqualValue)
    {
      $this->EqualValue = $EqualValue;
      return $this;
    }

    /**
     * @return DataModificationAction
     */
    public function getNotEqualValue()
    {
      return $this->NotEqualValue;
    }

    /**
     * @param DataModificationAction $NotEqualValue
     * @return RestrictionOfNullableOfDataModificationAction
     */
    public function setNotEqualValue($NotEqualValue)
    {
      $this->NotEqualValue = $NotEqualValue;
      return $this;
    }

}
