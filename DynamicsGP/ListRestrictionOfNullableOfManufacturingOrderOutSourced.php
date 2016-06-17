<?php

class ListRestrictionOfNullableOfManufacturingOrderOutSourced extends RestrictionOfNullableOfManufacturingOrderOutSourced
{

    /**
     * @var ArrayOfNullableOfManufacturingOrderOutSourcedfo2IbYCo $Items
     */
    protected $Items = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfNullableOfManufacturingOrderOutSourcedfo2IbYCo
     */
    public function getItems()
    {
      return $this->Items;
    }

    /**
     * @param ArrayOfNullableOfManufacturingOrderOutSourcedfo2IbYCo $Items
     * @return ListRestrictionOfNullableOfManufacturingOrderOutSourced
     */
    public function setItems($Items)
    {
      $this->Items = $Items;
      return $this;
    }

}
