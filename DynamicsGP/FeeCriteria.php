<?php

class FeeCriteria extends ItemCriteriaBase
{

    /**
     * @var ListRestrictionOfNullableOfFeeType $Type
     */
    protected $Type = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ListRestrictionOfNullableOfFeeType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param ListRestrictionOfNullableOfFeeType $Type
     * @return FeeCriteria
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
