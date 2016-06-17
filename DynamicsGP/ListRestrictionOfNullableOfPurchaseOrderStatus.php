<?php

class ListRestrictionOfNullableOfPurchaseOrderStatus extends RestrictionOfNullableOfPurchaseOrderStatus
{

    /**
     * @var ArrayOfNullableOfPurchaseOrderStatusfo2IbYCo $Items
     */
    protected $Items = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfNullableOfPurchaseOrderStatusfo2IbYCo
     */
    public function getItems()
    {
      return $this->Items;
    }

    /**
     * @param ArrayOfNullableOfPurchaseOrderStatusfo2IbYCo $Items
     * @return ListRestrictionOfNullableOfPurchaseOrderStatus
     */
    public function setItems($Items)
    {
      $this->Items = $Items;
      return $this;
    }

}
