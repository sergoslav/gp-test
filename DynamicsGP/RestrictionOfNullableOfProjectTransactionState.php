<?php

class RestrictionOfNullableOfProjectTransactionState
{

    /**
     * @var ProjectTransactionState $EqualValue
     */
    protected $EqualValue = null;

    /**
     * @var ProjectTransactionState $NotEqualValue
     */
    protected $NotEqualValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProjectTransactionState
     */
    public function getEqualValue()
    {
      return $this->EqualValue;
    }

    /**
     * @param ProjectTransactionState $EqualValue
     * @return RestrictionOfNullableOfProjectTransactionState
     */
    public function setEqualValue($EqualValue)
    {
      $this->EqualValue = $EqualValue;
      return $this;
    }

    /**
     * @return ProjectTransactionState
     */
    public function getNotEqualValue()
    {
      return $this->NotEqualValue;
    }

    /**
     * @param ProjectTransactionState $NotEqualValue
     * @return RestrictionOfNullableOfProjectTransactionState
     */
    public function setNotEqualValue($NotEqualValue)
    {
      $this->NotEqualValue = $NotEqualValue;
      return $this;
    }

}
