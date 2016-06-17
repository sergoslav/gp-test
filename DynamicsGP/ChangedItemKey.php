<?php

class ChangedItemKey extends ChangedBusinessObjectGreatPlainsKey
{

    /**
     * @var string $Id
     */
    protected $Id = null;

    /**
     * @var ItemType $ItemType
     */
    protected $ItemType = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param string $Id
     * @return ChangedItemKey
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return ItemType
     */
    public function getItemType()
    {
      return $this->ItemType;
    }

    /**
     * @param ItemType $ItemType
     * @return ChangedItemKey
     */
    public function setItemType($ItemType)
    {
      $this->ItemType = $ItemType;
      return $this;
    }

}
