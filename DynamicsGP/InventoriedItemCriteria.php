<?php

class InventoriedItemCriteria extends ItemCriteriaBase
{

    /**
     * @var RestrictionOfNullableOfboolean $IsDiscontinued
     */
    protected $IsDiscontinued = null;

    /**
     * @var ListRestrictionOfNullableOfInventoriedItemType $Type
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
     * @return InventoriedItemCriteria
     */
    public function setIsDiscontinued($IsDiscontinued)
    {
      $this->IsDiscontinued = $IsDiscontinued;
      return $this;
    }

    /**
     * @return ListRestrictionOfNullableOfInventoriedItemType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param ListRestrictionOfNullableOfInventoriedItemType $Type
     * @return InventoriedItemCriteria
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
