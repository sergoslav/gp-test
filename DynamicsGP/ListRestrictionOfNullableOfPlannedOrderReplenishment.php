<?php

class ListRestrictionOfNullableOfPlannedOrderReplenishment extends RestrictionOfNullableOfPlannedOrderReplenishment
{

    /**
     * @var ArrayOfNullableOfPlannedOrderReplenishmentfo2IbYCo $Items
     */
    protected $Items = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfNullableOfPlannedOrderReplenishmentfo2IbYCo
     */
    public function getItems()
    {
      return $this->Items;
    }

    /**
     * @param ArrayOfNullableOfPlannedOrderReplenishmentfo2IbYCo $Items
     * @return ListRestrictionOfNullableOfPlannedOrderReplenishment
     */
    public function setItems($Items)
    {
      $this->Items = $Items;
      return $this;
    }

}
