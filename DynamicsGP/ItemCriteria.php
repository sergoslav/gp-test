<?php

class ItemCriteria extends ItemCriteriaBase
{

    /**
     * @var RestrictionOfNullableOfboolean $IsDiscontinued
     */
    protected $IsDiscontinued = null;

    /**
     * @var ListRestrictionOfNullableOfItemType $Type
     */
    protected $Type = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return RestrictionOfNullableOfboolean
     */
    public function getIsDiscontinued()
    {
      return $this->IsDiscontinued;
    }

    /**
     * @param RestrictionOfNullableOfboolean $IsDiscontinued
     * @return ItemCriteria
     */
    public function setIsDiscontinued($IsDiscontinued)
    {
      $this->IsDiscontinued = $IsDiscontinued;
      return $this;
    }

    /**
     * @return ListRestrictionOfNullableOfItemType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param ListRestrictionOfNullableOfItemType $Type
     * @return ItemCriteria
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
