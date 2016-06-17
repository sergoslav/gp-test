<?php

class ListRestrictionOfNullableOfApplicationStatus extends RestrictionOfNullableOfApplicationStatus
{

    /**
     * @var ArrayOfNullableOfApplicationStatusfo2IbYCo $Items
     */
    protected $Items = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfNullableOfApplicationStatusfo2IbYCo
     */
    public function getItems()
    {
      return $this->Items;
    }

    /**
     * @param ArrayOfNullableOfApplicationStatusfo2IbYCo $Items
     * @return ListRestrictionOfNullableOfApplicationStatus
     */
    public function setItems($Items)
    {
      $this->Items = $Items;
      return $this;
    }

}
