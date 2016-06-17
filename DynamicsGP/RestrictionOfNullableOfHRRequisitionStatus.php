<?php

class RestrictionOfNullableOfHRRequisitionStatus
{

    /**
     * @var HRRequisitionStatus $EqualValue
     */
    protected $EqualValue = null;

    /**
     * @var HRRequisitionStatus $NotEqualValue
     */
    protected $NotEqualValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return HRRequisitionStatus
     */
    public function getEqualValue()
    {
      return $this->EqualValue;
    }

    /**
     * @param HRRequisitionStatus $EqualValue
     * @return RestrictionOfNullableOfHRRequisitionStatus
     */
    public function setEqualValue($EqualValue)
    {
      $this->EqualValue = $EqualValue;
      return $this;
    }

    /**
     * @return HRRequisitionStatus
     */
    public function getNotEqualValue()
    {
      return $this->NotEqualValue;
    }

    /**
     * @param HRRequisitionStatus $NotEqualValue
     * @return RestrictionOfNullableOfHRRequisitionStatus
     */
    public function setNotEqualValue($NotEqualValue)
    {
      $this->NotEqualValue = $NotEqualValue;
      return $this;
    }

}
