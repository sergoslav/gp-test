<?php

class ListRestrictionOfstring extends RestrictionOfstring
{

    /**
     * @var ArrayOfstring $Items
     */
    protected $Items = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfstring
     */
    public function getItems()
    {
      return $this->Items;
    }

    /**
     * @param ArrayOfstring $Items
     * @return ListRestrictionOfstring
     */
    public function setItems($Items)
    {
      $this->Items = $Items;
      return $this;
    }

}
