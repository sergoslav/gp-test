<?php

class ListRestrictionOfNullableOfint extends RestrictionOfNullableOfint
{

    /**
     * @var ArrayOfNullableOfint $Items
     */
    protected $Items = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfNullableOfint
     */
    public function getItems()
    {
      return $this->Items;
    }

    /**
     * @param ArrayOfNullableOfint $Items
     * @return ListRestrictionOfNullableOfint
     */
    public function setItems($Items)
    {
      $this->Items = $Items;
      return $this;
    }

}
