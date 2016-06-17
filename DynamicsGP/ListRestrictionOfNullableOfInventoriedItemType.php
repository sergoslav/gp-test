<?php

class ListRestrictionOfNullableOfInventoriedItemType extends RestrictionOfNullableOfInventoriedItemType
{

    /**
     * @var ArrayOfNullableOfInventoriedItemTypefo2IbYCo $Items
     */
    protected $Items = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfNullableOfInventoriedItemTypefo2IbYCo
     */
    public function getItems()
    {
      return $this->Items;
    }

    /**
     * @param ArrayOfNullableOfInventoriedItemTypefo2IbYCo $Items
     * @return ListRestrictionOfNullableOfInventoriedItemType
     */
    public function setItems($Items)
    {
      $this->Items = $Items;
      return $this;
    }

}
