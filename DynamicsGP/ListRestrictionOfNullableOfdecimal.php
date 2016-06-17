<?php

class ListRestrictionOfNullableOfdecimal extends RestrictionOfNullableOfdecimal
{

    /**
     * @var ArrayOfNullableOfdecimal $Items
     */
    protected $Items = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfNullableOfdecimal
     */
    public function getItems()
    {
      return $this->Items;
    }

    /**
     * @param ArrayOfNullableOfdecimal $Items
     * @return ListRestrictionOfNullableOfdecimal
     */
    public function setItems($Items)
    {
      $this->Items = $Items;
      return $this;
    }

}
