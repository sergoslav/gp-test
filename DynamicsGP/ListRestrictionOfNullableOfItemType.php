<?php

class ListRestrictionOfNullableOfItemType extends RestrictionOfNullableOfItemType
{

    /**
     * @var ArrayOfNullableOfItemTypefo2IbYCo $Items
     */
    protected $Items = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfNullableOfItemTypefo2IbYCo
     */
    public function getItems()
    {
      return $this->Items;
    }

    /**
     * @param ArrayOfNullableOfItemTypefo2IbYCo $Items
     * @return ListRestrictionOfNullableOfItemType
     */
    public function setItems($Items)
    {
      $this->Items = $Items;
      return $this;
    }

}
