<?php

class ItemChangedKeyCriteria extends BaseChangedKeyCriteria
{

    /**
     * @var BetweenRestrictionOfstring $ItemKeyId
     */
    protected $ItemKeyId = null;

    /**
     * @var ListRestrictionOfNullableOfItemType $ItemType
     */
    protected $ItemType = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return BetweenRestrictionOfstring
     */
    public function getItemKeyId()
    {
      return $this->ItemKeyId;
    }

    /**
     * @param BetweenRestrictionOfstring $ItemKeyId
     * @return ItemChangedKeyCriteria
     */
    public function setItemKeyId($ItemKeyId)
    {
      $this->ItemKeyId = $ItemKeyId;
      return $this;
    }

    /**
     * @return ListRestrictionOfNullableOfItemType
     */
    public function getItemType()
    {
      return $this->ItemType;
    }

    /**
     * @param ListRestrictionOfNullableOfItemType $ItemType
     * @return ItemChangedKeyCriteria
     */
    public function setItemType($ItemType)
    {
      $this->ItemType = $ItemType;
      return $this;
    }

}
