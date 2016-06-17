<?php

class ListRestrictionOfNullableOfDataModificationAction extends RestrictionOfNullableOfDataModificationAction
{

    /**
     * @var ArrayOfNullableOfDataModificationAction9Rw_PZyuZ $Items
     */
    protected $Items = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfNullableOfDataModificationAction9Rw_PZyuZ
     */
    public function getItems()
    {
      return $this->Items;
    }

    /**
     * @param ArrayOfNullableOfDataModificationAction9Rw_PZyuZ $Items
     * @return ListRestrictionOfNullableOfDataModificationAction
     */
    public function setItems($Items)
    {
      $this->Items = $Items;
      return $this;
    }

}
