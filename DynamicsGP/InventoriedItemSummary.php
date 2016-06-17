<?php

class InventoriedItemSummary extends ItemSummaryBase
{

    /**
     * @var boolean $IsDiscontinued
     */
    protected $IsDiscontinued = null;

    /**
     * @var InventoriedItemType $Type
     */
    protected $Type = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return boolean
     */
    public function getIsDiscontinued()
    {
      return $this->IsDiscontinued;
    }

    /**
     * @param boolean $IsDiscontinued
     * @return InventoriedItemSummary
     */
    public function setIsDiscontinued($IsDiscontinued)
    {
      $this->IsDiscontinued = $IsDiscontinued;
      return $this;
    }

    /**
     * @return InventoriedItemType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param InventoriedItemType $Type
     * @return InventoriedItemSummary
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
