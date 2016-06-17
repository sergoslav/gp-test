<?php

class ListRestrictionOfNullableOfManufacturingOrderPriority extends RestrictionOfNullableOfManufacturingOrderPriority
{

    /**
     * @var ArrayOfNullableOfManufacturingOrderPriorityfo2IbYCo $Items
     */
    protected $Items = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfNullableOfManufacturingOrderPriorityfo2IbYCo
     */
    public function getItems()
    {
      return $this->Items;
    }

    /**
     * @param ArrayOfNullableOfManufacturingOrderPriorityfo2IbYCo $Items
     * @return ListRestrictionOfNullableOfManufacturingOrderPriority
     */
    public function setItems($Items)
    {
      $this->Items = $Items;
      return $this;
    }

}
