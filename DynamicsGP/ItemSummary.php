<?php

class ItemSummary extends ItemSummaryBase
{

    /**
     * @var boolean $IsDiscontinued
     */
    protected $IsDiscontinued = null;

    /**
     * @var ItemType $Type
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
     * @return ItemSummary
     */
    public function setIsDiscontinued($IsDiscontinued)
    {
      $this->IsDiscontinued = $IsDiscontinued;
      return $this;
    }

    /**
     * @return ItemType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param ItemType $Type
     * @return ItemSummary
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
