<?php

class ListRestrictionOfNullableOfboolean extends RestrictionOfNullableOfboolean
{

    /**
     * @var ArrayOfNullableOfboolean $Items
     */
    protected $Items = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfNullableOfboolean
     */
    public function getItems()
    {
      return $this->Items;
    }

    /**
     * @param ArrayOfNullableOfboolean $Items
     * @return ListRestrictionOfNullableOfboolean
     */
    public function setItems($Items)
    {
      $this->Items = $Items;
      return $this;
    }

}
