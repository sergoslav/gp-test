<?php

class ListRestrictionOfNullableOfEmployeePayTypes extends RestrictionOfNullableOfEmployeePayTypes
{

    /**
     * @var ArrayOfNullableOfEmployeePayTypesfo2IbYCo $Items
     */
    protected $Items = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfNullableOfEmployeePayTypesfo2IbYCo
     */
    public function getItems()
    {
      return $this->Items;
    }

    /**
     * @param ArrayOfNullableOfEmployeePayTypesfo2IbYCo $Items
     * @return ListRestrictionOfNullableOfEmployeePayTypes
     */
    public function setItems($Items)
    {
      $this->Items = $Items;
      return $this;
    }

}
