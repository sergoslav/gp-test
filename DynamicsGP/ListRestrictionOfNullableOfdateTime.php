<?php

class ListRestrictionOfNullableOfdateTime extends RestrictionOfNullableOfdateTime
{

    /**
     * @var ArrayOfNullableOfdateTime $Items
     */
    protected $Items = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfNullableOfdateTime
     */
    public function getItems()
    {
      return $this->Items;
    }

    /**
     * @param ArrayOfNullableOfdateTime $Items
     * @return ListRestrictionOfNullableOfdateTime
     */
    public function setItems($Items)
    {
      $this->Items = $Items;
      return $this;
    }

}
