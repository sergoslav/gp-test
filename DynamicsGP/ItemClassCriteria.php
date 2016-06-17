<?php

class ItemClassCriteria extends Criteria
{

    /**
     * @var LikeRestrictionOfstring $Description
     */
    protected $Description = null;

    /**
     * @var LikeRestrictionOfstring $ItemClassId
     */
    protected $ItemClassId = null;

    /**
     * @var ListRestrictionOfNullableOfItemType $Type
     */
    protected $Type = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param LikeRestrictionOfstring $Description
     * @return ItemClassCriteria
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return LikeRestrictionOfstring
     */
    public function getItemClassId()
    {
      return $this->ItemClassId;
    }

    /**
     * @param LikeRestrictionOfstring $ItemClassId
     * @return ItemClassCriteria
     */
    public function setItemClassId($ItemClassId)
    {
      $this->ItemClassId = $ItemClassId;
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
     * @return ItemClassCriteria
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
