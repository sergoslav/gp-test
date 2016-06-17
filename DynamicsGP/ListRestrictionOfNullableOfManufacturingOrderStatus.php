<?php

class ListRestrictionOfNullableOfManufacturingOrderStatus extends RestrictionOfNullableOfManufacturingOrderStatus
{

    /**
     * @var ArrayOfNullableOfManufacturingOrderStatusfo2IbYCo $Items
     */
    protected $Items = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfNullableOfManufacturingOrderStatusfo2IbYCo
     */
    public function getItems()
    {
      return $this->Items;
    }

    /**
     * @param ArrayOfNullableOfManufacturingOrderStatusfo2IbYCo $Items
     * @return ListRestrictionOfNullableOfManufacturingOrderStatus
     */
    public function setItems($Items)
    {
      $this->Items = $Items;
      return $this;
    }

}
